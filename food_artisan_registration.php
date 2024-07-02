<?php 
session_start();

	include("connection.php");
	include("function2.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$food_artisan_email = $_POST['food_artisan_email'];
		$food_artisan_password = $_POST['food_artisan_password'];

		if(!empty($food_artisan_email) && !empty($food_artisan_password))
		{

			$food_artisan_id = random_num(20);
			$query = "insert into food_artisan_table (food_artisan_id,food_artisan_email,food_artisan_password) values ('$food_artisan_id','$food_artisan_email','$food_artisan_password')";

			mysqli_query($conn, $query);
            header("Location: food_artisan_login.html");
			
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>