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
        <h2>Write a Review</h2>

        <form id="review_form" action="reviews.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <p>
              <label>Name:</label>
              <input type="text" name="reviewer"/>
            </p>
            <p>
              <label>Email:</label>
              <input type="email" name="reviewer_email"/>
            </p>
            <p>
              <label>Rating:</label>
              <input type="radio" name="rating" value="5" checked/>5
              <input type="radio" name="rating" value="4"/>4
              <input type="radio" name="rating" value="3"/>3
              <input type="radio" name="rating" value="2"/>2
             <input type="radio" name="rating" value="1"/>1
              </p>

              <p>
                <label>Review Title:</label>
                <input type="text" name="review_title"/>
              </p>
              <p>
                <label>Comment:</label>
                <textarea name="comment" cols="40" rows="5"></textarea>
              </p>
              <p>
                Images to Share? Upload it!
                <label>Image:</label>
                <input type="file" name="img_file"/>
              </p>
              <p>
                <button name="submit_review" type="submit">Add Review</button>
                <button name="submit_review" type="submit">Cancel Review</button>
              </p>
       </fieldset>
    </form>

    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>




 