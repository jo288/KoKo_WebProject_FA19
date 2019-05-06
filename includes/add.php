<?php

$error = 'hidden';
$error2 = 'hidden';
$error3 = 'hidden';
$submiterror = 'hidden';
$name = '';
$email = '';
$response = '';
$reason  = '';
$delivery  = '';
$faqresponse  = '';


if (isset($_POST['contactsubmit'])) {
    // ':name' => $name,
    // ':menu_id' => $menu_id,
    // ':reason' => $reason,
    // ':image_name' => $image_name,
    // ':image_ext' => $image_ext,
    // ':description' => $desc,

    $name = filter_input(INPUT_POST, 'menu_id', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $menu_id = filter_input(INPUT_POST, 'menu_id', FILTER_SANITIZE_INT);
    $valid_order = true;

    //add contact to database
    if ($valid_order) {
        $sql = "INSERT INTO images (name, menu_id, reason, image_name, image_ext,description,source,review_id)
    VALUES (:name,:email, :reason, :text, :delivery)";
        $params = array(
            ':name' => $name,
            ':menu_id' => $menu_id,
            ':image_name' => $image_name,
            ':image_ext' => $image_ext,
            ':description' => $desc,
            ':source' => "",
            ':review_id' => 0
        );
        $result = exec_sql_query($db, $sql, $params);
        if ($result) {
            $review_id = $db->lastInsertId("id");
            echo ("Image Successfully Submitted!");
            $submiterror = 'hidden';
        } else {
            $submiterror = '';
        }
    }
}
?>


<h2>Add to Gallery</h2>
<form id="review_form" action="reviews.php" method="post" enctype="multipart/form-data">
    <fieldset class="review">


        <p>
            <label>Menu ID:</label>
            <input class="review" type="radio" name="rating" value="5" checked />5
            <input class="review" type="radio" name="rating" value="4" <?php if (isset($rating) && $rating == "4") echo "checked"; ?> />4
            <input class="review" type="radio" name="rating" value="3" <?php if (isset($rating) && $rating == "3") echo "checked"; ?> />3
            <input class="review" type="radio" name="rating" value="2" <?php if (isset($rating) && $rating == "2") echo "checked"; ?> />2
            <input class="review" type="radio" name="rating" value="1" <?php if (isset($rating) && $rating == "1") echo "checked"; ?> />1
        </p>

        <p>
            <label>Description:</label>
            <textarea class="review" name="desc"><?php echo htmlspecialchars($desc); ?></textarea>
        </p>

        <p>
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
            Upload Image Here
            <label>:</label>
            <input class="review" type="file" name="img_file" />
        </p>
        <p>
            <input class="review" name="add" type="submit" value="Add Image">

        </p>
    </fieldset>
</form>
