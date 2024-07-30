<?php
include './php/database.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hours Worked</th>
                <th>Image</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['hours_worked']}</td>
                <td><img src='../{$row['image']}' alt='Employee Image'></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
