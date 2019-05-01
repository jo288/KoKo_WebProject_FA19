<?php

$error = 'hidden';
$error2 = 'hidden';
$error3 = 'hidden';
$name = '';
$email = '';
$response = '';

if (isset($_POST['submit'])) {
  $name = $_POST['order_name'];
  $email = $_POST['userEmail'];
  $response = $_POST['response'];
  $reason = $_POST['reason'];
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

} else {
    // Form was not submitted.
  echo ("form not submitted");
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
        <li> <a >Response: <?php
                          echo $response;
                          ?></a></li>
      </ul>
      <?php

    } else {
      ?>
  <h2>Frequently Asked Questions</h2>
  	<form action="contact.php" id="contact_order" method="post" name="contact_order">
	<div>
		<label for="faq">Frequently Asked Questions:</label> <select id="faq" name="faq">
			<option value="ithacatogo">
				What are the store Hours?
			</option>
			<option value="deliverithaca">
				What is the store Adress?
			</option>
			<option value="grubhub">
				What Delivery Options are offered?
      </option>
       <input type="submit" name="faqsubmit" value="ANSWER"/>
		</select>
  </div>
    </form>
	<h2>Please leave your feedback here:</h2>
	<p>Please leave us a messege here between 25 and 500 characters.</p>
	<form action="contact.php" id="contact_order" method="post" name="contact_order">
		<fieldset>
			<legend>Contact us Form</legend>
			<p class="form_error &lt;?php echo $error; ?&gt;" id="nameError">Please provide a name for your response:</p>
			<div class="namecontain">
				<label for="name_field">Name on Order:</label> <input id="name_field" name="order_name" type="text" value="<?php echo htmlspecialchars($name); ?>">
			</div>
			<p class="form_error2 &lt;?php echo $error2; ?&gt;" id="nameError">Please provide a valid email for your order in the form example@example.___:</p>
			<div class="emailcontainer">
				<label for="email_field">Email:</label> <input id="emailfield" name="userEmail" type="text" value="<?php echo htmlspecialchars($email); ?>">
			</div>
			<div>
				<label for="reason">Please select your reason of Contact:</label> <select id="reason" name="reason">
					<option value="reqinfo">
						Request More Information.
					</option>
					<option value="resrev">
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
				<label for="ordertype">Delivery Method:</label> <select id="ordertype" name="ordertype">
					<option value="ithacatogo">
						Ithaca To Go
					</option>
					<option value="deliverithaca">
						Deliver Ithaca
					</option>
					<option value="grubhub">
						Grubhub
					</option>
					<option value="picup">
						Pick Up From Store
					</option><?php  echo htmlspecialchars($response);  ?>
				</select>
      </div>
       <input type="submit" name="contactsubmit" value="ASK"/>
		</fieldset>
	</form>

      <?php

    }
    ?>

    </article>
  </div>

</body>

</html>
