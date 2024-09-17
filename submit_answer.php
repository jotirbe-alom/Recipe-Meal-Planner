<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $answer = $_POST['answer'];

    // Sanitize input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $id);
    $answer = mysqli_real_escape_string($conn, $answer);

    $sql = "UPDATE question_answer_table SET ANSWER = '$answer' WHERE ID = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo 'Data updated successfully<br>';
    } else {
        die('Error updating data: ' . $conn->error . '<br>');
    }
    
    mysqli_close($conn);
    exit();
} else {
    echo 'Invalid request method';
    exit();
}
?>
