<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])){ header("Location: index.php"); exit(); }
include "../includes/db.php";

$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<h2>Client Messages</h2>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th></tr>
<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['message']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No messages found.</td></tr>";
}
?>
</table>