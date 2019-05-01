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
