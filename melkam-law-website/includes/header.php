<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Melkam Law Office</title>
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<header>

<div class="logo-area">
<img src="images/article1.jpg">
<h2>Melkam Law Office</h2>
</div>

<nav>
<ul>

<li>
<a class="<?php if($currentPage=='home.php') echo 'active'; ?>" href="home.php">
Home
</a>
</li>

<li>
<a class="<?php if($currentPage=='about.php') echo 'active'; ?>" href="about.php">
About
</a>
</li>

<li>
<a class="<?php if($currentPage=='practice-areas.php') echo 'active'; ?>" href="practice-areas.php">
Practice Areas
</a>
</li>

<li>
<a class="<?php if($currentPage=='blog.php') echo 'active'; ?>" href="blog.php">
Blog
</a>
</li>

<li>
<a class="<?php if($currentPage=='contact.php') echo 'active'; ?>" href="contact.php">
Contact
</a>
</li>

<li>
<a class="<?php if($currentPage=='consultation.php') echo 'active'; ?>" href="consultation.php">
Book Consultation
</a>
</li>

</ul>
</nav>

</header>
<button id="scrollDownBtn">↓</button>
<script>

document.getElementById("scrollDownBtn").onclick=function(){
window.scrollTo({top:document.body.scrollHeight,behavior:"smooth"});
}

</script>
</body>