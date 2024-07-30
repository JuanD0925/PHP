<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php include '../php/header.php'; ?>
    <div class="container">
        <h1>Employee List</h1>
        <!-- This will be dynamically populated by PHP -->
        <?php include '../php/view_employees.php'; ?>
    </div>
    <?php include '../php/footer.php'; ?>
</body>
</html>
