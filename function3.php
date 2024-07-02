<?php

function check_login($conn)
{

	if(isset($_SESSION['nutritionist_id']))
	{

		$id = $_SESSION['nutritionist_id'];
		$query = "select * from nutritionists_table where nutritionist_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$nutritionist_data = mysqli_fetch_assoc($result);
			return $nutritionist_data;
		}
	}

	header("Location: nutritionist_home.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}