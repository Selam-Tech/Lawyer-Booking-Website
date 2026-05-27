<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])){ header("Location: index.php"); exit(); }
include "../includes/db.php";

if(isset($_POST['submit'])){
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $excerpt = $conn->real_escape_string($_POST['excerpt']);
    $author = $_SESSION['admin_username'];
    $date_posted = date("Y-m-d H:i:s");
    
    // Handle image upload
    $image = $_FILES['image']['name'];
    $target = "../images/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO blog_posts (title, content, excerpt, image, date_posted, author) 
            VALUES ('$title', '$content', '$excerpt', '$image', '$date_posted', '$author')";

    if($conn->query($sql) === TRUE){
        $success = "Blog post added successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>
<h2>Add New Blog Post</h2>
<?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Blog Title" required><br><br>
    <textarea name="content" placeholder="Full Content" required></textarea><br><br>
    <textarea name="excerpt" placeholder="Short Excerpt" required></textarea><br><br>
    <input type="file" name="image" required><br><br>
    <button type="submit" name="submit">Add Blog Post</button>
</form>