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

        <!-- include some images of Koko -->

        <div class="about_section">
            <h3 class="about_header">Koko</h3>
            <p class="about_info">
                For over 10 years, Koko Korean Restaurant has been one of the most popular eateries in Collegetown. We strive to serve only the best food with the freshest, high-quality ingredients to not only provide comfort food for Korean students away from home, but also to introduce Korean cuisine to people of all backgrounds. We offer a variety of Korean foods, from spicy classic stews to refreshing cold summer noodles, and offer options for all dietary needs.
            </p>
        </div>

        <div class="about_section">
            <h3 class="about_header">Korean Cuisine</h3>
            <p class="about_info">
                For more information about Korean cuisine, please see <a href="https://en.wikipedia.org/wiki/Korean_cuisine" target="_blank">this website</a>.
            </p>
        </div>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
