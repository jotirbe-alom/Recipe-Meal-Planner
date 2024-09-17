<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .nutritionists-panel {
            margin: 50px 10px;
            display: flex;
            justify-content: left;
        }
        h2 {
            margin: auto 10px;
        }
        img {
            width: 64px;
            height: 64px;
        }
    </style>
    <title>Nutritionists Home</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <div class="nutritionists-panel">
            <img src="admin.png" class="img-fluid" alt="...">
            <h2>Nutritionists panel</h2>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Questions</th>
                        <th>Answer</th>
                        <th>Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'connection.php';
                        $sql = "SELECT * FROM question_answer_table ORDER BY id";
                        $table = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($table) > 0) {
                            while ($row = mysqli_fetch_assoc($table)) {
                                echo '<tr>';
                                echo '<td>' . $row["ID"] . '</td>';
                                echo '<td>' . $row["COMMENT"] . '</td>';
                                echo '<td><form action="submit_answer.php" method="post">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answer"></textarea></td>
                                    <td>
                                    <input type="hidden" name="id" value="' . $row["ID"] . '">
                                    <input type="submit" class="btn btn-primary">
                                    </form></td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
