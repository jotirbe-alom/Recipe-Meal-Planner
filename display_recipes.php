<?php
    include("connection.php");

    $query = "SELECT * FROM artisan_recipes";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $recipe_name = $row['recipe_name'];
            $image_path = $row['images'];
            $procedure_text = $row['procedure_text'];
            $dish_type = $row['dish_type'];
            $dietary_choice = $row['dietary_choice'];
            $bmi_range = $row['bmi_range'];
            $budget_range = $row['budget_range'];

           
            echo "<div class='row'>
            <div class='leftcolumn'>
                <div class='card'>
                <h3>$recipe_name</h3>
                <img src='$image_path' >
                <p><strong>Procedure:</strong> $procedure_text</p>
                <p><strong>Dish Type:</strong> $dish_type</p>
                <p><strong>Dietary Choice:</strong> $dietary_choice</p>
                <p><strong>BMI Range:</strong> $bmi_range</p>
                <p><strong>Budget Range:</strong> $budget_range</p>
                    
                </div>
            </div>
        </div>
               
            ";
        }
    } else {
        echo "No recipes found.";
    }

    $conn->close();
?>
