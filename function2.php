<?php

function check_login($conn)
{

	if(isset($_SESSION['food_artisan_id']))
	{

		$id = $_SESSION['food_artisan_id'];
		$query = "select * from food_artisan_table where food_artisan_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$food_artisan_data = mysqli_fetch_assoc($result);
			return $food_artisan_data;
		}
	}

	header("Location: food-artisan_page.php");
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
		

		$text .= rand(0,9);
	}

	return $text;
}

?>