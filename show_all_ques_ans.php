<?php
include("connection.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM question_answer_table";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Questions and Answers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 40px;
    }
    .card {
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      margin: 20px auto;
      padding: 30px;
      max-width: 600px;
    }
    .card h2 {
      margin: 0 0 10px;
    }
    .card p {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <h1>Previous Asked Questions</h1>
  <?php
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='card'>";
      echo "<h2>ID: " . $row["ID"]. "</h2>";
      echo "<p><strong>Name:</strong> " . $row["NAME"]. "</p>";
      echo "<p><strong>Email:</strong> " . $row["EMAIL"]. "</p>";
      echo "<p><strong>Question:</strong> " . $row["COMMENT"]. "</p>";
      echo "<p><strong>Answer:</strong> " . $row["ANSWER"]. "</p>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</body>
</html>
