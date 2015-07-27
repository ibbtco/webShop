<?php
session_start();
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
        $username = stripslashes($_POST['username']);
		$email = stripslashes($_POST['email']);
        $password = stripslashes($_POST['password']);
		$e = $connection->query("SELECT email FROM user WHERE email = '" . $email ."'"); 
		$u = $connection->query("SELECT username FROM user WHERE username = '" . $username . "'");
		if ($u->num_rows != 0)
		  {
			  echo "Username already exists";
			  echo '<script>alert("Username already exists. Please try another one")
			  location.href = "http://gobets.pw/infoeducatia/webShop/v1.1/";</script>';
			  exit;
		  }
		if ($e->num_rows != 0)
		  {
			  echo "Email already exists";
			  echo '<script>alert("Email already exists. Please try another one")
			  location.href = "http://gobets.pw/infoeducatia/webShop/v1.1/";</script>';
			  exit;
		  }
		
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        if ($connection->query($query) === TRUE) {
			echo '<script>alert("Succesfuly registered!")
			  location.href = "http://gobets.pw/infoeducatia/webShop/v1.1/";</script>';
            echo 'Succesfuly registered.';
        } else{
			echo 'There was a problem creating a new user!';
		}
    }
?>