    <!-- Show Contact Submissions -->
        <?php
        $sql = "SELECT * FROM contact";
        $params = array();
        $result = exec_sql_query($db, $sql, $params);
        $records = $result->fetchAll();
        foreach ($records as $record) { ?>
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
            </div>
        <?php
    } ?>
