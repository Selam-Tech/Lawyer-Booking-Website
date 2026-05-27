<?php include "includes/header.php"; ?>

<section class="page-hero">

<h1>Contact Our Law Office</h1>

<p>Get professional legal assistance today.</p>

</section>


<section class="contact-info">

<div class="container">

<h2>Contact Information</h2>

<p>📞 Phone: <a href="tel:+251912345678">+251 912 345 678</a></p>

<p>📧 Email: <a href="mailto:info@melkamlaw.com">info@melkamlaw.com</a></p>

<p>📍 Office Address: Sabai Topia, Addis Ababa</p>

</div>

</section>


<section class="office-hours">

<div class="container">

<h2>Office Hours</h2>

<ul>

<li>Monday – Friday : 9:00 AM – 6:00 PM</li>

<li>Saturday : 10:00 AM – 2:00 PM</li>

<li>Sunday : Closed</li>

</ul>

</div>

</section>


<section class="map-section">

<h2>Our Location</h2>

<div class="map-container">

<iframe 
src="https://maps.google.com/maps?q=Addis%20Ababa&t=&z=13&ie=UTF8&iwloc=&output=embed"
width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
</iframe>

</div>

</section>


<section class="contact-form">

<div class="container">

<h2>Send Us a Message</h2>

<form action="process_contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Describe your legal issue" required></textarea>
    <button type="submit">Send Message</button>
</form>

</div>

</section>

<?php include "includes/footer.php"; ?>