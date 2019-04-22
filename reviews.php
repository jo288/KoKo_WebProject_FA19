<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "reviews";
$index = "current";

$db = open_or_init_sqlite_db('secure/site.sqlite', 'secure/init.sql');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="styles/all.css" media="all" rel="stylesheet" type="text/css">
    <title>Reviews</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main>
        <h2>Reviews</h2>


    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
