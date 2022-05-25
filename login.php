<?php 

    session_start();

   require "process.php";

   $pageTitle = "Login Form";

   require "header.php"; ?>


    <div id="login-wrapper">
    
        <form action="" method="post" id = "login">
 
            <div class="border-box">
                <h2>Login Form</h2>
                <label for="uname" id="userName" required>Username:</label>
                <input type="text" name="username" placeholder="Enter Username" id="uname" required><br/>
            
                <label for="upass" id="passWord" required>Password:</label>
                <input type="password" name="password" placeholder="Enter Password" id="upass" required><br/>
            
                <input type="submit" name ="login" value = "Login" id="submit">
            
                <a href="register.php">Don't have an account yet? Signup</a>
            </div>
  
        </form>
    </div>

    <?php require "footer.php"; ?>