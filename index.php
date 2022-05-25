<?php
    session_start();

    require "process.php";
    
    if(!isset($_SESSION['sid'])){
        header("location:login.php");
    }
    else{
        echo "<h1>Welcome our bookstore</h1>";

        
?>
<a href="addBook.php">Click here for Add Book</a> <br><br>
<a href="viewList.php">Click here for View List</a><br><br>
<form action="" method="post">
    <input type="submit" name="logout" value="logout">
</form>
<?php
}
?>