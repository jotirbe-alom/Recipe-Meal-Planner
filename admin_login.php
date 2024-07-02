<?php 
session_start();

include("connection.php");
include("function4.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    if(!empty($admin_email) && !empty($admin_password))
    {

        //read from database
        $query = "select * from admin_table where admin_email = '$admin_email' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $admin_data = mysqli_fetch_assoc($result);
                
                if($admin_data['admin_password'] === $admin_password)
                {

                    //$_SESSION['admin_id'] = $admin_data['admin_id'];
                    header("Location: admin_page.php");
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

