<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "gallery";
$index = "current";

$db = open_or_init_sqlite_db('secure/site.sqlite', 'secure/init.sql');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

    <title>Photo Gallery</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php");

    $image_records = exec_sql_query(
        $db,
        "SELECT * FROM images",
        null
    )->fetchAll();

    $category_records = exec_sql_query(
        $db,
        "SELECT * FROM categories",
        null
    )->fetchAll();

    $diet_records = exec_sql_query(
        $db,
        "SELECT * FROM diets",
        null
    )->fetchAll();

    $categories = array("All");
    foreach ($category_records as $record) {
        $categories[] = $record["category"];
    }
    foreach ($diet_records as $record) {
        $categories[] = $record["diet"];
    }

    ?>

    <main id="gallery_main">
        <h2>Gallery</h2>

        <?php if (isset($_GET["album"])) {
            $album_name = $_GET["album"];
            if (!in_array($album_name, $categories)) {
                echo "<h3>This album doesn't exist!</h3>";
            } else {
                echo "<h3>" . $album_name . "</h3>\n";
                if (array_search($album_name, $categories) == 0) {
                    // ALL
                    $sql = "SELECT * FROM images";
                    $params = null;
                } else if (array_search($album_name, $categories) <= sizeof($category_records)) {
                    // MENU CATEGORY
                    $sql = "SELECT images.id, images.image_ext, images.description from images INNER JOIN menu ON images.menu_id = menu.id INNER JOIN categories ON menu.category_id = categories.id WHERE categories.category = :category";
                    $params = array(
                        ':category' => $album_name
                    );
                } else {
                    // DIETARY RESTRICTION
                    $sql = "SELECT * FROM images";
                }
                $records = exec_sql_query($db, $sql, $params)->fetchAll();
            }
            ?>
            <div id="gallery_container">
                <?php
                for ($j = 0; $j < 4; $j++) {
                    echo "<div class='gallery_column'>";
                    for ($i = $j; $i < sizeof($records); $i += 4) {
                        $record = $records[$i];
                        echo "
                        <div class='album_image'>
                            <img class='album_image_file' src='uploads/" . $record["id"] . "." . $record["image_ext"] . "' alt=''>
                            <p class='album_image_desc'>" . $record["description"] . "</p>
                        </div>";
                    }
                    echo "</div>\n";
                }
                ?>
            </div>
        <?php } else { ?>

            <div id="albums_container">
                <?php
                // TODO: select first image for each album
                foreach ($categories as $category) {
                    echo "
                <div class='album'>
                    <a href = 'gallery.php?album=" . $category . "'>
                    <img class='album_cover' src='uploads/1.jpg' alt=''>
                    <p class='album_name'>" . $category . "</p></a>
                </div>";
                }
                ?>
            </div>

        <?php } ?>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
