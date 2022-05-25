<?php

  session_start();

require "process.php";

$pageTitle = "Registration Form";

require "header.php";
?>

 

    <div id="reg_wrapper">
      <form action="" method="post">
        <h2>Registration Form</h2>

        <label for="" id="firstName">First Name :</label>
        <input type="text" name="firstname" required><br/>

        <label for="" id="lastName">Last Name :</label>
        <input type="text" name="lastname" required><br/>

        <label for="r3" id="userName">Username :</label>
        <input type="text" name="username" required><br/>

        <label for="" id="passWord">Password :</label>
        <input type="password" name="password" required><br/>

        <label for="" id="email">Email :</label>
        <input type="email" name="email" required><br/>

        <label for="" id="phone">Mobile No :</label>
        <input type="text" name="phone" required><br/>

        <input type="submit" name ="register" value = "Register" id="register">
        <a href="login.php">Already have an account?Log in</a>
      </form>
    </div>
  <?php require "footer.php"; ?>
