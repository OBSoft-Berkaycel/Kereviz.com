<?php 

	if(isset($_POST['signup-submit'])) {

		require 'dbcon.php';

		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordRepeat = $_POST['passwordRepeat'];

		if(empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
			header("Location: ../signUp.php?error=emptyfield&email=".$email."&username=".$username);
			exit();
		}

		else if () {
			header("Location: ../signUp.php?invalidmail=emptyfield&email=".$email."&username=".$username);
		}

	}



 ?>