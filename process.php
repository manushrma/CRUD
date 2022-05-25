<?php

// Registration code here

    if(isset($_REQUEST["register"])){
        extract($_REQUEST);
        require "connection.php";
        $query = "INSERT into users SET firstname = '$firstname', lastname = '$lastname', username = '$username', password ='$password', email = '$email', mobile = '$phone' ";
        $execute = mysqli_query($conn, $query);
        if(!$execute){
            echo mysqli_error($conn);
        }
        else{
            if(mysqli_insert_id($conn) > 0){

                echo "<script>alert('Registered Successfully. You can login Now')</script>";               
            
            }
        } 
	}




    // Login code here

    if(isset($_REQUEST["login"])){
        extract($_REQUEST);
        require "connection.php";
        $query = "select * from users where username='$username' and password = '$password' ";
        $execute = mysqli_query($conn, $query);
        if(!$execute){
            echo mysqli_error($conn);
        }
        else{
            if(mysqli_num_rows($execute)>0){
                $result = mysqli_fetch_assoc($execute);
                $_SESSION['sid'] = $result["id"];
                // echo "successfully";
                header("location:index.php");
            }
                else{
                    echo "<script>alert('Invalid username/password')</script>";
                }
        }
    }



    // addbook code here

    if(isset($_REQUEST['submit'])){
		extract($_REQUEST);
		require "connection.php";
		$query = "INSERT into bookstore SET title = '$title', author = '$author', price = '$price', other = '$other'";
		$execute = mysqli_query($conn, $query);
		if(mysqli_insert_id($conn) > 0){
            echo "<script>alert('New book successfully added')</script>";
			echo "<h1><a href = 'ViewBookList.php'>View Book List</a> </h1>";
		}
	}
//     else{
//         if(isset($_REQUEST['home'])){
//             header("location:")
//         }

//    }



// Logout code here

    if(isset($_REQUEST["logout"])){
        unset($_SESSION['sid']);
        session_destroy();
        header("location:login.php");
    }




?>