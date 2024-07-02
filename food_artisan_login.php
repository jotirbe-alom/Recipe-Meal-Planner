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

        //read from database
        $query = "select * from food_artisan_table where food_artisan_email = '$food_artisan_email' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $food_artisan_data = mysqli_fetch_assoc($result);
                
                if($food_artisan_data['food_artisan_password'] === $food_artisan_password)
                {

                    $_SESSION['food_artisan_id'] = $food_artisan_data['food_artisan_id'];
                    header("Location: food-artisan_home.html");
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

