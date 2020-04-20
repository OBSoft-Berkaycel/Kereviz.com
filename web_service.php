<?php 


	$servername="localhost";
	$username="root";
	$password="";

//create connection to DB
	$conn=new MySQLi($servername,$username,$password);

	if ($conn->connect_error) {
		# code...
		die("connection Failed" . $conn-> connect_error);
	}
	echo "connection Succesfull";





 ?>