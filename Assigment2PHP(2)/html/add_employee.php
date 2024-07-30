<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../styles.css"> 
</head>
<body>
    <?php include '../php/header.php'; ?> 

    <div class="container">
        <h1>Add Employee</h1>
        <form action="../php/add_employee.php" method="post" enctype="multipart/form-data"> <!-- Form action -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="hours_worked">Hours Worked:</label>
            <input type="number" id="hours_worked" name="hours_worked" required>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Add Employee</button>
        </form>
    </div>

    <?php include '../php/footer.php'; ?> 
</body>
</html>