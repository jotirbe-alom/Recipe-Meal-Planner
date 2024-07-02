<?php

function check_login($conn)
{

	if(isset($_SESSION['admin_id']))
	{

		$id = $_SESSION['admin_id'];
		$query = "select * from admin_table where admin_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $admin_data;
		}
	}

	
	header("Location: admin_page.php");
	die;

}
