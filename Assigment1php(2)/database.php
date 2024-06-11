<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()){
   die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO table1 (Full_Name, age, Hours_Worked, Hourly_Rate)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

$fullname = $_POST["fullname"];
$age = $_POST["age"];
$hoursworked = $_POST["hoursworked"];
$hourlyrate = $_POST["hourlyrate"];

$stmt->bind_param("sidi", $fullname, $age, $hoursworked, $hourlyrate);

mysqli_stmt_execute($stmt);

echo "Connection successful."; 
/*
if (mysqli_connect_error()) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connection Successful<br>";

if (isset($_POST["fullname"], $POST["age"], $_POST["hoursworked"], $post["hourlyrate"])) {
    $name = $_POST["fullname"];
    $age = $_POST["age"];
    $hours_worked = $_POST["hoursworked"];
    $hourly_rate = $_POST["hourlyrate"];
    $sql = "INSERT INTO `table1` (Full_Name, Age, Hours_Worked, Hourly_Rate) 
            VALUES (?, ?, ?, ?)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
} else {
    echo "Fullname is not set";
}

$conn->close();
*/
?>