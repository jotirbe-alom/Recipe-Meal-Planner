<?php
    include 'connection.php';
    $name=$_GET["name"];
    $email=$_GET["mail"];
    $comment=$_GET["comment"];
    $sql= "INSERT INTO question_answer_table(NAME,EMAIL,COMMENT) VALUES ('".$name."','".$email."','".$comment."');";
    if(mysqli_query($conn,$sql)) echo'<html><h2>data inserted successfully</h2></html> </br>';
    else die('error inserting data : '.$conn->error.'</br>');
    mysqli_close($conn);
    exit();
?>