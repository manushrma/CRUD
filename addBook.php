<?php 

   session_start();
   
   require "process.php";

   $pageTitle = "Add book";

   require "header.php"; ?>

<div id="wrapper">
	<form action="" method="post">
		<input type="text" placeholder="Enter Book Title" name="title" required><br>
		<input type="text" placeholder="Enter Book Author" name="author" required><br>
		<input type="text" placeholder="Enter Book Price" name="price" required><br>
		<textarea name="other" placeholder="Enter the description" id="" cols="30" rows="10" required></textarea><br>
		<input type="submit" name="submit" value="Add Book"> <br> <br>
		<input type="submit" name="home" value="Back to home">
	</form>
</div>


<?php require "footer.php"; ?>