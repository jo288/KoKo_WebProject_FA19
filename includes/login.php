     <!-- // This code is adpted from Lab 8 -->
     <fieldset id='loginset'>
         <form id="loginForm" action="<?php
                                        if ($current_user == null) {echo ("contact.php#bottom");}else{
                                        echo htmlspecialchars($_SERVER['PHP_SELF']);} ?>" method="post">
             <ul id='loginlist'>
                 <p class="form_error2 <?php echo $loginerror; ?>" id="formerror">Invalid UserName or Password</p>
                 <li id='uname'>
                     <label for="username">Username:</label>
                     <input id="username" type="text" name="username" />
                 </li>
                 <li id='pword'>
                     <label for="password">Password:</label>
                     <input id="password" type="password" name="password" />
                 </li>
                 <li id='submitter'>
                     <button name="login" id='login' type="submit">Sign In</button>
                 </li>
             </ul>
         </form>
     </fieldset>
