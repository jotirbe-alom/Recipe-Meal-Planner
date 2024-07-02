<?php 
session_start();

	include("connection.php");
	include("function3.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$nutritionist_email = $_POST['nutritionist_email'];
		$nutritionist_password = $_POST['nutritionist_password'];

		if(!empty($nutritionist_email) && !empty($nutritionist_password) && !is_numeric($nutritionist_email))
		{

			//save to database
			$nutritionist_id = random_num(20);
			$query = "insert into nutritionists_table (nutritionist_id,nutritionist_email,nutritionist_password) values ('$nutritionist_id','$nutritionist_email','$nutritionist_password')";

			mysqli_query($conn, $query);

			header("Location: nutritionist_home.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>