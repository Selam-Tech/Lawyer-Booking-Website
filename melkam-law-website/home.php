<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<section class="hero">

<div>

<h1>Expert Legal Solutions for Your Needs</h1>

<p>Trusted & Professional Legal Services in Ethiopia</p>

<a class="btn" href="consultation.php">Get Consultation</a>

</div>

</section>

<section class="trust-bar">

<div class="trust-item">
<h3><span id="exp">0</span>+</h3>
<p>Years Experience</p>
</div>

<div class="trust-item">
<h3><span id="cases">0</span>+</h3>
<p>Cases Handled</p>
</div>

<div class="trust-item">
<h3><span id="clients">0</span>%</h3>
<p>Client Satisfaction</p>
</div>

<div class="trust-item">
<h3><span id="support">0</span>/7</h3>
<p>Legal Support</p>
</div>

</section>
<section class="practice-section">

<h2>Find Your Legal Solution</h2>
<p class="subtitle">What legal issue are you facing?</p>

<div class="practice-buttons">

<div class="practice-box">

<i class="fa-solid fa-building"></i>

<p>Business Law</p>

<a class="learn-btn" href="business-law.php">Learn More</a>

</div>

<div class="practice-box">
<i class="fa-solid fa-people-roof"></i>
<p>Family Law</p>
<a class="learn-btn" href="family-law.php">Learn More</a>

</div>

<div class="practice-box">
<i class="fa-solid fa-house"></i>
<p>Property Law</p>
<a class="learn-btn" href="property-law.php">Learn More</a>
</div>

<div class="practice-box">
<i class="fa-solid fa-briefcase"></i>
<p>Employment Law</p>
<a class="learn-btn" href="employment-law.php">Learn More</a>
</div>

</div>

<a class="guidance-btn" href="consultation.php">Get Guidance</a>

</section>

<section class="section">
    <div class="container">

<h2>Our Practice Areas</h2>

<div class="services">

<div class="service-box">
<h3>Corporate Law</h3>
<p>Legal services for businesses and companies.</p>
<a href="cooperative-law.php" class="learn-btn">Read More</a>
</div>

<div class="service-box">
<h3>Property Law</h3>
<p>Support for land and property disputes.</p>
<a href="propertyy.php" class="learn-btn">Read More</a>
</div>

<div class="service-box">
<h3>Employment Law</h3>
<p>Workplace legal advice and representation.</p>
<a href="employment.php" class="learn-btn">Read More</a>
</div>

</div>
</div>
</section>

<section class="why-us">

<h2>Why Choose Us</h2>

<div class="why-container">

<div class="why-box">
<i class="fa-solid fa-scale-balanced"></i>
<h3>Professional Expertise</h3>
<p>Experienced legal support for individuals and businesses.</p>
</div>

<div class="why-box">
<i class="fa-solid fa-user-shield"></i>
<h3>Client Confidentiality</h3>
<p>Your legal matters are handled with complete privacy.</p>
</div>

<div class="why-box">
<i class="fa-solid fa-handshake"></i>
<h3>Trusted Legal Advice</h3>
<p>Reliable legal guidance based on Ethiopian law.</p>
</div>

</div>

</section>

<section class="attorney">

<div class="container">

<h2>Meet Your Attorney</h2>

<div class="attorney-box">

<img src="images/img.jnpg" alt="Attorney Melkam">

<div class="attorney-info">

<h3>Attorney Melkam</h3>

<p class="expertise">Specialist in Business, Property & Employment Law</p>

<p>
Attorney Melkam provides trusted legal guidance for individuals and businesses.
With extensive experience handling legal cases, he focuses on delivering
clear solutions and protecting the rights of his clients.
</p>

<a href="consultation.php" class="consult-btn">Book Consultation</a>

</div>

</div>

</div>

</section>
<section class="trust-badges">

<h2>Trusted Legal Professional</h2>

<div class="badge-container">

<img src="images/badge1.png" alt="Legal Certification">

<img src="images/badge2.png" alt="Professional Membership">

<img src="images/badge3.png" alt="Trusted Legal Advisor">

</div>

</section>

<section class="testimonials">
    <div class="testimonial-container">
    <?php
        $sql = "SELECT * FROM testimonials ORDER BY datePosted DESC LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="testimonial-box">';
            echo '<p>"' . $row['testimonial'] . '"</p>';
            echo '<h4>';
            for($i=0; $i<$row['rating']; $i++){
                echo "⭐️";
            }
            echo '</h4>';
            echo '<span>' . $row['client_name'] . '</span>';
            echo '</div>';
        }
    } else {
        echo "<p>No testimonials found.</p>";
    }
    ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Latest Articles</h2>
        <div class="article-container">
        <?php
        
        $sql = "SELECT * FROM blog_posts ORDER BY date_posted DESC LIMIT 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="article">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
                echo '<h3>' . $row['title'] . '</h3>';
                echo '<p>' . $row['excerpt'] . '</p>';
                echo '<a class="read-btn" href="blog_detail.php?id=' . $row['id'] . '">Read More</a>';
                echo '</div>';
            }
        } else {
            echo "<p>No articles found.</p>";
        }
        ?>
        </div>
    </div>
</section>


<section class="consultation">
    <div class="container">

<h2>Schedule Consultation</h2>

<form>

<input type="text" placeholder="Your Name">

<input type="tel" placeholder="Phone Number">

<textarea placeholder="Describe your issue"></textarea>

<button type="submit">Book Now</button>

</form>
</div>

</section>

<div style="text-align:center;">
<a class="btn" href="faq.php">FAQ</a>
</div>
<section class="cta">

<div class="container">

<h2>Need Legal Assistance?</h2>

<p>
Speak directly with a professional lawyer and get guidance for your legal situation.
</p>

<a href="consultation.php" class="cta-btn">
Get Legal Guidance
</a>

</div>

</section>



<?php include "includes/footer.php"; ?>
<script>
function animateCounter(id, start, end, duration) {
    let obj = document.getElementById(id);
    let range = end - start;
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / range));

    let timer = setInterval(function () {
        current += increment;
        obj.innerText = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// SCROLL TRIGGER
let started = false;

window.addEventListener("scroll", function() {
    let section = document.querySelector(".trust-bar");
    let position = section.getBoundingClientRect().top;
    let screenHeight = window.innerHeight;

    if(position < screenHeight - 100 && !started) {
        animateCounter("exp", 0, 10, 4000);
        animateCounter("cases", 0, 500, 4000);
        animateCounter("clients", 0, 95, 4000);
        animateCounter("support", 0, 24, 4000);
        started = true;
    }
});
// Fade-in animation
window.addEventListener("scroll", function() {
    let items = document.querySelectorAll(".trust-item");

    items.forEach((item) => {
        let position = item.getBoundingClientRect().top;
        let screenHeight = window.innerHeight;

        if(position < screenHeight - 50) {
            item.classList.add("show");
        }
    });
});

// Service animation
window.addEventListener("scroll", function() {
    let services = document.querySelectorAll(".service-box");

    services.forEach((box) => {
        let position = box.getBoundingClientRect().top;
        let screenHeight = window.innerHeight;

        if(position < screenHeight - 50) {
            box.classList.add("show");
        }
    });
});
</script>

</body>
</html>