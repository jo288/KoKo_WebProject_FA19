<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "contact";
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

    <title>Contact</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main>
        <h2>Contact</h2>


    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
