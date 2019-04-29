<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "about";
$index = "current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

    <title>About</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main id="about_main">
        <h2>About</h2>

        <div class="about_section">
            <h3 class="about_header">Koko</h3>
            <p>
            </p>
        </div>

        <div class="about_section">
            <h3 class="about_header">Korean Cuisine</h3>
            <p>
                For more information about Korean cuisine, please see <a href="https://en.wikipedia.org/wiki/Korean_cuisine" target="_blank">this website</a>.
            </p>
        </div>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
