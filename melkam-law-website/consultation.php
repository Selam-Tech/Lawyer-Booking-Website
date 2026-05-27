<?php include "includes/header.php"; ?>

<section class="page-hero">

<h1>Book a Legal Consultation</h1>

<p>Schedule a consultation to discuss your legal matter.</p>

</section>


<section class="consultation">

<h2>Request Legal Consultation</h2>

<p>
Fill out the form below and our law office will contact you
to schedule your consultation.
</p>

<form action="process_consultation.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="tel" name="phone" placeholder="Phone Number" required>
    <select name="service" required>
        <option value="">Select Legal Service</option>
        <option value="Cooperative Law">Cooperative Law</option>
        <option value="Property Law">Property Law</option>
        <option value="Employment Law">Employment Law</option>
    </select>
    <textarea name="issue" placeholder="Describe your issue" required></textarea>
    <button type="submit">Book Consultation</button>
</form>
<p style="margin-top:15px;font-size:14px;color:#777;">
Your information will remain confidential and used only
for legal consultation purposes.
</p>

</section>

<?php include "includes/footer.php"; ?>