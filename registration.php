<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];

		if(!empty($user_email) && !empty($user_password) && !is_numeric($user_email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_email,user_password) values ('$user_id','$user_email','$user_password')";

			mysqli_query($conn, $query);

			header("Location: user_page.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>