
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>View Content</title>
</head>
<body>
    <header>
        <nav>
            <a href="add_content.html">Add Content</a>
            <a href="view_content.html">View Content</a>
        </nav>
        <h1>Employee Portal</h1>
    </header>
    <main>
        <h2>View Employee Records</h2>
        
        <<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT Full_Name, Age, Hours_Worked, Hourly_Rate FROM table1";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: ". $conn->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1'> 
            <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>Hours Worked</th>
                <th>Hourly Rate</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["Full_Name"]."</td>
                <td>".$row["Age"]."</td>
                <td>".$row["Hours_Worked"]."</td>
                <td>".$row["Hourly_Rate"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


    </main>
    <footer>
        <p>&copy; 2024 Employee Portal</p>
    </footer>
</body>
</html>