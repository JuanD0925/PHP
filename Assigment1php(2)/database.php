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
?>