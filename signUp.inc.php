<?php 




if (isset($_POST['signUp-submit'])) {
	# code...

	require 'dbcon.php';

	$USERNAME = $_POST['username'];
	$EMAIL = $_POST['email'];
	$PASSWORD = $_POST['pwd'];
	$Password_Repeat = $_POST['pwd-repeat'];
	

	if (empty($USERNAME) || empty($EMAIL) || empty($PASSWORD) || empty($Password_Repeat)) {
		# code...
	header("Location: ../signUp.php?error=emptyfields&username=".$USERNAME."&email=".$EMAIL);
	exit();

	}else if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $USERNAME)) {
		# code...

		header("Location: ../signUp.php?error=invalidmailusername=".$USERNAME);
	exit();
	}
	else if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
	# code...
		header("Location: ../signUp.php?error=invalidmail&username=".$USERNAME);
	exit();
	}else if (!preg_match("/^[a-zA-Z0-9]*$/", $USERNAME)) {
	# code...
		header("Location: ../signUp.php?error=invalidusername&email=".$EMAIL);
	exit();
	}else if ($PASSWORD !== $Password_Repeat) {
		# code...

		header("Location: ../signUp.php?error=invalidpasswordCheck&username =".$USERNAME."email=".$EMAIL);
	exit();

	}else{

		$sql = "SELECT USERNAME FROM LOGIN WHERE USERNAME =?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			# code...
			
		header("Location: ../signUp.php?error=sqlError");
	exit();			
		
	}else {
		# code...
		mysqli_stmt_bind_param($stmt,"ss",$USERNAME,$PASSWORD);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck>0) {
			# code...
			header("Location: ../signUp.php?error=usertaken&email=".$EMAIL);
		exit();	
		}else {
			$sql = "INSERT INTO LOGIN (USERNAME,EMAIL,PASSWORD) VALUES(?,?,?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
			# code...
			
				header("Location: ../signUp.php?error=sqlError");
			exit();			
			}else{
				$hashedpwd = password_hash($PASSWORD, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"sss",$USERNAME,$EMAIL,$hashedpwd);
				mysqli_stmt_execute($stmt);
				header("Location: ../signUp.php?signUp=success");
			exit();
			}
		}

	}
}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}

else{
	header("Location: ../signUp.php");
			exit();
}