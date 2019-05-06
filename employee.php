<?php
// INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

$title = "login";
$index = "current";

$db = open_or_init_sqlite_db('secure/site.sqlite', 'secure/init.sql');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

    <title>Contact</title>
</head>

<body>
    <!-- TODO: This should be your main page for your site. -->
    <?php include("includes/header.php"); ?>

    <main id="contact_main">

        <h2 id='employee'>Employee Contact Responses</h2>



        <?php
        if ($current_user == null) {
            if (isset($_GET["submit"])) {
                echo ($messeges2);
                include("includes/login.php");
                ?>


            <?php
        } else {
            ?>
                <p id='loginmessege'><strong>You need to log in to view the submitted Contact Information. Go to the login page by clicking LOGIN</strong></p>
                <!-- <form action="contact.php#employee" id="login_but" method="get" name="login_but">
                                                                                            <input name="submit" id='loginclick' value="LOGIN" type="submit"> </form> -->


                <?php include("includes/login.php");
            }
        }
        if ($current_user != null) {
            include("includes/contactsubmit.php");
        }
        ?>


    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>
