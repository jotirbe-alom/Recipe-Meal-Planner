<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriber Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        .navbar {
            background-color: #264752;
            padding: 20px;
            height: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar,
        .navbar .navbar-links {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        .navbar .logo {
            font-size: 22px;
            font-weight: 500;
            color: #fff;
        }

        .navbar .navbar-links {
            list-style: none;
            display: flex;
            column-gap: 20px;
        }

        .navbar .navbar-links li {
            display: inline;
        }

        .navbar .navbar-links h3 {
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
        }

        .header {
            background-color: #fff;
            color: #264752;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"] {
            padding: 8px;
            width: 300px;
        }

        button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 50%;
            padding: 20px 320px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            .navbar .navbar-links {
                flex-direction: column;
                row-gap: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">Subscriber Panel</div>
        <ul class="navbar-links">
            <li><h3><a href="make_payment.html">Make Payment</a></h3></li>
            <li><h3><a href="show_all_ques_ans.php">See All Questions</a></h3></li>
            <li><h3><a href="ask_question.html">Ask a Question</a></h3></li>
            <li><h3><a href="log_out_user.php">Log Out</a></h3></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <h2>Choose Your Recipe!</h2>
        </div>

        <form action="search.php" method="post" class="search-form">
            <input type="text" name="query" placeholder="Search by dietary choice, Budget or recipe name">
            <button type="submit">Search</button>
        </form>

        <?php include("display_recipes.php"); ?>
    </div>
</body>

</html>
