<?php



$error = 'hidden';
$error2 = 'hidden';
$error3 = 'hidden';
$name = '';
$email = '';
$response = '';
$reason  = '';
$delivery  = '';
$faqresponse  = '';


if (isset($_POST['contactsubmit'])) {
  $name = filter_input(INPUT_POST, 'order_name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_EMAIL);
  $response = filter_input(INPUT_POST, 'response', FILTER_SANITIZE_STRING);
  $reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING);
  $delivery  = filter_input(INPUT_POST, 'delivery', FILTER_SANITIZE_STRING);
  $valid_order = true;
  if (strlen($email) < 5) {
    $error2 = 'TEST';
  }
  if (strlen($response) < 25) {
    $error3 = 'TEST';
  }
  if (strlen($name) == 0) {
    $valid_order = false;
    $error = 'TEST';
  } else {
    if (strlen($email) < 5) {
      $valid_order = false;
      $error2 = 'TEST';
    } else {
      if (strlen($response) < 25 || strlen($response) > 500) {
        $valid_order = false;
        $error3 = 'TEST';
      } else {
        $valid_order = true;
      }

    }
  }
  //add review to database
  if ($valid_order) {
    $sql = "INSERT INTO contact (name, email, reason, text, delivery)
    VALUES (:name,:email, :reason, :text, :delivery)";
    $params = array(
      ':name' => $name,
      ':email' => $email,
      ':reason' => $reason,
      ':text' => $response,
      ':delivery' => $delivery
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      $review_id = $db->lastInsertId("id");
        echo ("Contact Messege successfully submitted!");

    } else{
      echo ("Adding Contact Messege failed!");
      }
  }

} else {
    // Form was not submitted.
  echo ("Errors have prevented your form from submission");
}
?>
<!DOCTYPE html>
<html>

<body>

  <div id="content-wrap">
    <article id="content">

      <?php
      if (isset($valid_order) && $valid_order) {
        ?>
       <h1 class = submit>Thank you for your feedback. We will get back to you shortly, <?php
                                                                                        echo $name;
                                                                                        ?> </h1>
      <ul>
        <li> <a >Name: <?php
                      echo $name;
                      ?></a></li>
        <li> <a >Email: <?php
                        echo $email;
                        ?></a></li>
        <li> <a >Reason for contact: <?php
                                    echo $reason;
                                    ?></a></li>

        <li> <a >Delivery Option: <?php
                echo $delivery;
                ?></a></li>
        <li> <a >Response: <?php
                          echo $response;
                          ?></a></li>
      </ul>
      <?php

    } else {
      ?>
  <h2>Frequently Asked Questions</h2>
  	<form action="contact.php" id="contact_order" method="post" name="contact_order"value="<?php
                    echo htmlspecialchars($faqresponse);
                    ?>">
	<div class='question'>
		<label for="faq"></label> <select id="faq" name="faq">
			<option value=hours>
				What are the store Hours?
			</option>
			<option value="adress">
				What is the store Adress?
			</option>
			<option value="options">
				What Delivery Options are offered?
      </option>
       <input type="submit" name="faqsubmit" id= 'faqsubmit'value="ANSWER"/>
		</select>
  </div>
    </form>


<?php

if (isset($_POST['faqsubmit'])) {
  $faqresponse = $_POST['faq'];

  if ($faqresponse == "hours"){
?>
	<fieldset class='hours'>
		<legend>Store Hours</legend>
		<ul id='storehours'>
			<li>Wednesday 11:30AM–9:30PM</li>
			<li>Thursday 11:30AM–9:30PM</li>
			<li>Friday 11:30AM–9:30PM</li>
			<li>Saturday 11:30AM–9:30PM</li>
			<li>Sunday 11:30AM–9:30PM</li>
			<li>Monday 11:30AM–9:30PM</li>
			<li>Tuesday Closed</li>
		</ul>
	</fieldset>
<?php
  }
  if ($faqresponse == "options")  {
?>
	<fieldset class='options'>
		<legend>Delivery Options</legend>
		<ul>
			<li>Ithaca To Go</li>
			<li>Deliver Ithaca</li>
			<li>Grubhub</li>

		</ul>
	</fieldset>
<?php
  }
  if ($faqresponse == "adress")  {

?>
	<fieldset class='adress'>
		<legend>Adress</legend>
321 College Ave, Ithaca, NY 14850
	</fieldset>
<?php
  }
}
?>



	<h2>Please leave your feedback here:</h2>

   <form id="contact_order" method="post" action="contact.php">
          <fieldset class="review">
            <legend>Contact us Form</legend>
	<p>Please leave us a messege here between 25 and 500 characters.</p>
            <p class="form_error <?php
                                echo $error;
                                ?>"id = "nameError">Please provide a name for your response: </p>
            <div class = "namecontain">
              <label for="name_field">Name on Order:</label>
              <input id="name_field" type="text" name="order_name"
              value="<?php
                    echo htmlspecialchars($name);
                    ?>"/>
            </div>
            <p class="form_error2 <?php
                                  echo $error2;
                                  ?>"id = "nameError">Please provide a valid email for your order in the form example@example.___:</p>
           <div class="emailcontainer">
            <label for="email_field">Email:</label>
              <input id="emailfield" type="text" name="userEmail"
              value="<?php
                    echo htmlspecialchars($email);
                    ?>"/>
              </div>
			<div>
				<label for="reason">Please select your reason of Contact:</label> <select id="reason" name="reason"value="<?php
                    echo htmlspecialchars($reason);
                    ?>">
					<option value="RequestInformation">
						Request More Information.
					</option>
					<option value="Reservation">
						Make a reservation.
					</option>
					<option value="Feedback">
						Provide feedback or Get Help.
					</option>
					<option value="Other">
						Other.
					</option>
				</select>
			</div>
			<div>
				<label for="delivery">Delivery Method:</label> <select id="delivery" name="delivery"   value="<?php
                    echo htmlspecialchars($delivery);
                    ?>">
					<option value="IthacaToGo">
						Ithaca To Go
					</option>
					<option value="DeliverIthaca">
						Deliver Ithaca
					</option>
					<option value="GrubHub">
						Grubhub
					</option>
					<option value="Pickup">
						Pick Up From Store
					</option><?php  echo htmlspecialchars($response);  ?>
				</select>
      </div>
                   <p class="form_error3 <?php
                                  echo $error3;
                                  ?>"id = "responseError">Your response did not meet the character requirement:</p>
                        <div>
              <label for="response">Please share your thoughts here:</label>
              <div>
                            <textarea id="response"  name="response" value=" ?>"><?php
                  echo htmlspecialchars($response);  ?> </textarea>
      </div>
                        </div>
       <input type="submit" name="contactsubmit" id= 'contactsubmit'value="ASK"/>
		</fieldset>
	</form>

      <?php

    }
    ?>

    </article>
  </div>

</body>

</html>
