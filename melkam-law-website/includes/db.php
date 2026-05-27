<?php
// db.php - database connection

$host = "localhost"; // usually localhost
$user = "root";      // your MySQL username
$pass = "";          // your MySQL password
$db   = "lawfirm_db"; // the database name you created

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>