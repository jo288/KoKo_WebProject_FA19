<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "dish";
$index = "current";

$db = open_or_init_sqlite_db('secure/site.sqlite', 'secure/init.sql');

// code referenced from lecture 18
if (isset($_GET['id'])) {
    $menu_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $sql = "SELECT * FROM menu WHERE id = :id;";
    $params = array(
        ':id' => $menu_id
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
        $menus = $result->fetchAll();
        if (count($menus) > 0) {
            $menu = $menus[0];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

    <title>Dish</title>
</head>

<body>

    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main>
        <h2><?php echo htmlspecialchars($menu["menu_name"]) ?></h2>


    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
