<?php
$servername = "mysql-container";  // The name of the MySQL service (to be used in Docker networking)
$username = "root";     // MySQL root username
$password = "root";     // MySQL root password (set in the init.sql file)
$dbname = "testdb";     // The database created in init.sql

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
