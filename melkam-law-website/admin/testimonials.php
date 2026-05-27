<?php
include "../includes/db.php";
include "../includes/header.php";
?>

<section class="section">
<div class="container">

<h2 class="page-title">Client Testimonials</h2>

<div class="testimonial-grid">

<?php
$sql = "SELECT * FROM testimonials ORDER BY date_posted DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo '<div class="testimonial-card">';
        echo '<p class="testimonial-text">"' . $row['testimonial'] . '"</p>';

        echo '<div class="testimonial-rating">';
        for($i=0; $i<$row['rating']; $i++){
            echo "⭐";
        }
        echo '</div>';

        echo '<h4 class="client-name">' . $row['client_name'] . '</h4>';
        echo '<span class="service-type">' . $row['service_type'] . '</span>';

        echo '</div>';
    }

}else{
    echo "<p>No testimonials available yet.</p>";
}
?>

</div>
</div>
</section>

<?php include "includes/footer.php"; ?>