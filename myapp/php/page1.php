<?php
$servername = "mysql-container";  // The name of the MySQL service (to be used in Docker networking)
$username = "root";     // MySQL root username
$password = "root";     // MySQL root password
$dbname = "testdb";     // The database created in init.sql

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM users LIMIT 1"; // Only select the first entry
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for the first row
    $row = $result->fetch_assoc();
    echo "<h1>" . $row["name"] . "</h1>";
    echo "<p>" . $row["email"] . "</p>";
} else {
    echo "0 results";
}

$conn->close();
?>
