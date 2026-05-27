<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])){
    header("Location: index.php");
    exit();
}
include "../includes/db.php";
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title></head>
<body>
<h1>Welcome, <?php echo $_SESSION['admin_username']; ?></h1>
<ul>
    <li><a href="messages.php">Client Messages</a></li>
    <li><a href="consultations.php">Consultations</a></li>
    <li><a href="blog.php">Manage Blog</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="testimonials.php">Testimonials</a></li>
</ul>
</body>
</html>