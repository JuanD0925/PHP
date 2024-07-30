<?php
include 'database.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are set
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $hours_worked = isset($_POST['hours_worked']) ? $_POST['hours_worked'] : '';

    // Handle file upload
    $imageName = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageName = $_FILES['image']['name'];
        $target = "../uploads/" . basename($imageName);

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Handle file upload error
        }
    }

    // Prepare and execute SQL query
    $query = "INSERT INTO employees (name, email, hours_worked, image) VALUES (:name, :email, :hours_worked, :image)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hours_worked', $hours_worked);
    $stmt->bindParam(':image', $imageName);

    if ($stmt->execute()) {
        // Success
        header("Location: ../html/view_employee.php");
        exit();
    } else {
        // Error handling
    }
}
?>