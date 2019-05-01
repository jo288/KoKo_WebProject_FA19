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

    <?php if ($current_user == null) {
        include("includes/contact.php");} ?>
        <main>
            <h2>Employee Contact Responses</h2>

            <p><strong>You need to log in to view the submitted Contact Information. Go to the login page by clicking LOGIN</strong></p>

            <?php
            if (isset($_GET["submit"])) {
                echo ($messeges2);
                ?>
                <!-- // This code is adpted from Lab 8 -->
                <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <ul>
                        <li>
                            <label for="username">Username:</label>
                            <input id="username" type="text" name="username" />
                        </li>
                        <li>
                            <label for="password">Password:</label>
                            <input id="password" type="password" name="password" />
                        </li>
                        <li>
                            <button name="login" type="submit">Sign In</button>
                        </li>
                    </ul>
                </form>

            <?php
        } else {
            ?>
                <form action="contact.php" id="login_but" method="get" name="login_but">
                    <input name="submit" value="LOGIN" type="submit"> </form>

            <?php }
        if ($current_user != null) {
            include("includes/contactsubmit.php");
        }
        ?>


        </main>

        <?php include("includes/footer.php"); ?>

    </body>

    </html>
