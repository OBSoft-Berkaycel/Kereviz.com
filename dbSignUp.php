<?php 

	if(isset($_POST['signup-submit'])) {

		require 'dbcon.php';

		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordRepeat = $_POST['passwordRepeat'];

		if(empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
			header("Location: ../signUp.php?eroor=emptyfield&email=".$email."&username=".$username)
		}

	}



 ?>