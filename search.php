<?php 
include "connection.php";

if(isset($_POST["query"])) {
    $search_term = $_POST["query"];

    $query = "SELECT * FROM Artisan_Recipes WHERE recipe_name LIKE '{$search_term}%' OR dietary_choice LIKE '{$search_term}%' OR budget_range LIKE '{$search_term}%'  ";
    $res = $conn->query($query);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
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
}
?>
