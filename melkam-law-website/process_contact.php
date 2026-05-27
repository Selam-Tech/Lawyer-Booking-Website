<?php
include "includes/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message_text = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message_text')";

    if ($conn->query($sql) === TRUE) {
        $message = "Your message has been successfully sent!";
        $msg_class = "success";
    } else {
        $message = "There was an error. Please try again.";
        $msg_class = "error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
.message-box {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    font-weight: bold;
    font-size: 16px;
}
.success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
</style>
</head>
<body>
<div class="message-box <?php echo $msg_class; ?>">
    <?php echo $message; ?>
</div>
</body>
</html>