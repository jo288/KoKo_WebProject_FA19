    <!-- Show Contact Submissions -->
    <fieldset class='contactsubmiss'>
        <?php



        $sql = "SELECT * FROM contact";
        $params = array();
        $result = exec_sql_query($db, $sql, $params);
        $records = $result->fetchAll();
        foreach ($records as $record) {
            $deleterkey = '\'deleter' .' '. $record['id'].'\'';
            echo ($deleterkey);
            if (isset($_GET[$deleterkey])) {
                echo ("Contact issue successfully deleted from entries.");
                // $arr = explode(".", $record['id'], 2);
                // $sql = "DELETE FROM contact WHERE id =  $arr[0];";
                // exec_sql_query($db, $sql);
                // unlink(GALLERY_UPLOADS_PATH . $_GET['id']);

            }

            ?>
            <div class="display_review">
                <!--Each table column is echoed into a td cell-->
                <div id="left" class="inner_display_review">
                    <p><?php echo htmlspecialchars($record['name']); ?></p>
                    <p><?php echo htmlspecialchars($record['email']); ?></p>
                    <p><?php echo htmlspecialchars($record['reason']); ?></p>
                    <p><?php echo htmlspecialchars($record['delivery']); ?></p>
                </div>
                <div id="right" class="inner_display_review">
                    <p>
                        <p id="display_review_title"><?php echo htmlspecialchars($record['review_title']); ?></p>
                        <p><?php echo htmlspecialchars($record['text']); ?></p>
                </div>
                <div>
                    <form id="deleterform" action="contact.php" method="get">
                        <button name="deleter <?php echo ($record['id']) ?>" id='deleter' type="submit">Delete</button>
                        <?php

                        ?>

                    </form>
                </div>
            </div>
        <?php
    } ?>
    </fieldset>
