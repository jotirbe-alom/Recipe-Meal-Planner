<?php 
session_start();

	include("connection.php");
	

	$recipe_name = $_POST['recipe_name'];
	$image = $_FILES['image'];
	$image_name = $image['name'];
	$image_path = "images/" . $image_name;
    $procedure_text = $_POST['procedure_text'];
	$dish_type = $_POST['dish_type'];
    $dietary_choice = $_POST['dietary_choice'];
    $bmi_range = $_POST['bmi_range'];
    $budget_range = $_POST['budget_range'];

	if ($image['error'] == UPLOAD_ERR_OK) {
		move_uploaded_file($image['tmp_name'], $image_path);
        $query = "INSERT INTO artisan_recipes (recipe_name, images, procedure_text, dish_type, dietary_choice, bmi_range, budget_range) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        
        if ($stmt) {
            $stmt->bind_param("sssssss", $recipe_name, $image_path, $procedure_text, $dish_type, $dietary_choice, $bmi_range, $budget_range);
            $stmt->execute();
            $stmt->close();
            
            header("Location: food-artisan_home.html");
        } else {
            echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        }
        
		
    }
?>