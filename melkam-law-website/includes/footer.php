<footer>

<div class="footer-container">

<div class="footer-about">
<h3>Melkam Law Office</h3>
<p>Providing trusted legal services and professional guidance for individuals and businesses in Ethiopia.</p>
</div>

<div class="footer-contact">

<h3>Contact Us</h3>

<p>
<i class="fa-solid fa-phone"></i>
<a href="tel:+251900000000">+251 900 000 000</a>
</p>

<p>
<i class="fa-solid fa-envelope"></i>
<a href="mailto:melkamoffice@email.com">
melkamoffice@email.com
</a>
</p>

<p>
<i class="fa-solid fa-location-dot"></i>
<a href="https://maps.google.com" target="_blank">
Addis Ababa, Ethiopia
</a>
</p>

</div>

</div>

<p class="copyright">
© <?php echo date("Y"); ?> Melkam Law Office. All Rights Reserved.
</p>

</footer>
<script>

const questions = document.querySelectorAll(".faq-question");

questions.forEach(q => {
q.addEventListener("click", () => {
const answer = q.nextElementSibling;

answer.style.display =
answer.style.display === "block" ? "none" : "block";
});
});

</script>
<a href="https://wa.me/251965151828" class="whatsapp-btn" target="_blank">

<span class="whatsapp-icon">💬</span>

<span class="whatsapp-text">Chat with Lawyer</span>

</a>
<button id="scrollTopBtn">↑</button>

<script>

let btn = document.getElementById("scrollTopBtn");

window.onscroll = function(){
if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
btn.style.display = "block";
}else{
btn.style.display = "none";
}
};

btn.onclick = function(){
window.scrollTo({top:0, behavior:"smooth"});
};

</script>

</body>
</html>

