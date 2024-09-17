<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>adminpage</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="adminpage_style.css">

    <!-- Line icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <style>
        body {
            padding-top: 70px; /* Adjusted padding-top to accommodate the navbar */
        }

        .container {
            margin-top: 20px; /* Adjusted margin-top for the container */
        }
    </style>
</head>

<body>
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">Admin Panel</a>

        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="admin_page.php">Home</a></li>
        </ul>

        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
            <i class="uil uil-search search-icon"></i>
            <input type="text" placeholder="Search here..." />
        </div>
    </nav>

    <div class="container">
        <h2>Admin Table</h2>
        <?php
        include "connection.php";

        $sql = "SELECT id, admin_id, admin_email FROM admin_table ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Admin_ID</th>';
            echo '<th>Admin_Email</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["admin_id"] . '</td>';
                echo '<td>' . $row["admin_email"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div class="container">
        <h2>Subscriber Table</h2>
        <?php
        include "connection.php";

        $sql = "SELECT id, user_id, user_email FROM users ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Subscriber_ID</th>';
            echo '<th>Subscriber_Email</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["user_id"] . '</td>';
                echo '<td>' . $row["user_email"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div class="container">
        <h2>Food Artisan Table</h2>
        <?php
        include "connection.php";

        $sql = "SELECT id, food_artisan_id, food_artisan_email FROM food_artisan_table ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Food-Artisan_ID</th>';
            echo '<th>Food-Artisan_Email</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["food_artisan_id"] . '</td>';
                echo '<td>' . $row["food_artisan_email"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div class="container">
        <h2>Nutritionists Table</h2>
        <?php
        include "connection.php";

        $sql = "SELECT id, nutritionist_id, nutritionist_email FROM nutritionists_table ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Nutritionist_ID</th>';
            echo '<th>Nutritionist_Email</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["nutritionist_id"] . '</td>';
                echo '<td>' . $row["nutritionist_email"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "0 results";
        }
        ?>
    </div>

    


    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
