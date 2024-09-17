<?php
include"connection.php";


// Get form data
$payment_method = $_POST['payment_method'];
$phone = $_POST['phone'];

if ($payment_method == 'cash') {
    $username = $_POST['username'];
    $subscription = $_POST['subscription'];

    // Calculate payment amount based on subscription
    $payment_amount = ($subscription == 'monthly') ? 10 : 100;

    // Insert into database
    $sql = "INSERT INTO payment_table (username, phone, payment_method, payment_amount)
            VALUES ('$username', '$phone', '$payment_method', '$payment_amount')";

    if ($conn->query($sql) === TRUE) {
        echo " <div style='max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; font-family: Arial, sans-serif;'>
        <h2 style='text-align: center; color: #4CAF50;'>Payment Receipt</h2>
        <p style='text-align: center; color: #333;'>Thank you for your payment, <strong>$username</strong>!</p>
        <table style='width: 100%; border-collapse: collapse; margin: 20px 0;'>
            <tr style='background-color: #f9f9f9;'>
                <th style='padding: 10px; border: 1px solid #ddd;'>Subscription Type</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Payment Method</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Amount Paid</th>
            </tr>
            <tr>
                <td style='padding: 10px; border: 1px solid #ddd;'>$subscription</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>$payment_method</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>$$payment_amount</td>
            </tr>
        </table>
        <p style='text-align: center; font-size: 0.9em; color: #888;'>If you have any questions, please contact support at support@example.com.</p>
    </div>" . $payment_amount;
        // Here you could add receipt generation logic (PDF, etc.)
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} elseif ($payment_method == 'card') {
    $card_number = $_POST['card_number'];
    
    // Payment amount for card (can be fixed or dynamic)
    $payment_amount = 50;

    // Insert into database
    $sql = "INSERT INTO payment_table (username, phone, payment_method, payment_amount)
            VALUES ('$username', '$phone', '$payment_method', '$payment_amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
