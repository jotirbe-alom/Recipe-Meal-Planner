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

        //read from database
        $query = "select * from users where user_email = '$user_email' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['user_password'] === $user_password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: user_page.php");
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




