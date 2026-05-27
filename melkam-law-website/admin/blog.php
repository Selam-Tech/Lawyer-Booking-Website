<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])){ header("Location: index.php"); exit(); }
include "../includes/db.php";

$sql = "SELECT * FROM blog_posts ORDER BY date_posted DESC";
$result = $conn->query($sql);
?>
<h2>Blog Posts</h2>
<a href="add_blog.php">Add New Blog</a>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Title</th><th>Date</th><th>Actions</th></tr>
<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['date_posted']}</td>
                <td>
                    <a href='edit_blog.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete_blog.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No blog posts found.</td></tr>";
}
?>
</table>