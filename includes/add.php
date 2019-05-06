<?php

if (isset($_POST['contactsubmit'])) {

    $upload_info = $_FILES["img_file"];
    $upload_name = basename($upload_info["name"]);
    $image_ext = strtolower(pathinfo($upload_name, PATHINFO_EXTENSION));

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
            ':image_name' => $upload_name,
            ':image_ext' => $image_ext,
            ':description' => $desc,
            ':source' => "",
            ':review_id' => 0
        );
        $result = exec_sql_query($db, $sql, $params);
        if ($result) {
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
            <label for="menu_id">Menu ID:</label>
            <input type="number" id="menu_id" name="menu_id" min="1" value="<?php echo $menu_id; ?>" />
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
