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

        //read from database
        $query = "select * from nutritionists_table where nutritionist_email = '$nutritionist_email' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $nutritionist_data = mysqli_fetch_assoc($result);
                
                if($nutritionist_data['Nutritionist_password'] === $nutritionist_password)
                {

                    $_SESSION['nutritionist_id'] = $nutritionist_data['nutritionist_id'];
                    header("Location: nutritionist_home.php");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
    }
}
?>




 