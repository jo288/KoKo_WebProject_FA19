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

        <h2>Please leave your feedback here:</h2>
        <p>Please leave us a messege here between 25 and 500 characters.</p>

        <form id="contact_order" method="post" action="about.php#contact">
          <fieldset>
            <legend>Contact us Form</legend>

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
                <label for="reason">Please select your reason of Contact:</label> <select id="reason" name="reason">
                    <option value="Mistake">
                        Correct a mistake on the site.
                    </option>
                    <option value="Help">
                        Get Help.
                    </option>
                    <option value="Feedback">
                        Provide feedback.
                    </option>
                    <option value="Other">
                    Other.
                    </option>
                </select>
                        </div>
             <p class="form_error3 <?php
                                  echo $error3;
                                  ?>"id = "responseError">Your response did not meet the character requirement.</p>
                        <div>
              <label for="response">Please share your thoughts here:</label>
              <div>
                            <textarea id="response"  name="response" value=" ?>"><?php
                  echo htmlspecialchars($response);  ?> </textarea>
      </div>
                        </div>
            <input type="submit" name="submit" value="Submit"/>
          </fieldset>
        </form>

      <?php

    }
    ?>

    </article>
  </div>

</body>

</html>
