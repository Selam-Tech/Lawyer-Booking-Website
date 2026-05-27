<?php
if(isset($_POST['password'])){
    echo password_hash($_POST['password'], PASSWORD_DEFAULT);
}
?>

<form method="POST">
<input type="text" name="password" placeholder="Enter password">
<button type="submit">Generate Hash</button>
</form>