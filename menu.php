<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "menu";
$index = "current";

$db = open_or_init_sqlite_db('secure/site.sqlite', 'secure/init.sql');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="styles/all.css" media="all" rel="stylesheet" type="text/css">
    <title>Menu</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main>
        <h2>Menu</h2>

        <form>
        </form>

        <div id="menu">
            <?php
            $sql = "SELECT * FROM categories;";
            $params = array();
            $categories = exec_sql_query($db, $sql, $params)->fetchAll();
            foreach ($categories as $category) {
                ?>
                <h3 class="category_header"><?php echo htmlspecialchars($category["category"]) ?></h3>
                <div class="menu_category">
                    <?php
                    $sql = "SELECT menu_name, description FROM menu INNER JOIN categories ON category_id = categories.id;"; // TODO: fix so "WHERE category = :cat" clause works
                    $params = array(
                        // ':cat' => $category
                    );
                    $menus = exec_sql_query($db, $sql, $params)->fetchAll();
                    foreach ($menus as $menu) {
                        ?>
                        <div class="menu_item">
                            <h4><?php echo htmlspecialchars($menu["menu_name"]) ?></h4>
                            <p>
                                <?php echo htmlspecialchars($menu["description"]) ?>
                            </p>
                        </div>
                    </div>
                <?php
            }
        }
        ?>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
