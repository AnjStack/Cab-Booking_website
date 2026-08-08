<nav class="navbar">

    <div class="logo">
        <div class="logo-box">
             <img src="assets/images/logo.jpeg" alt="Travel Cab Logo" class="logo-top">
        </div>
        <h2>Travel Cab</h2>

        <div class="hamburger">
            ☰
        </div>
    </div>


    <ul class="nav-links">
        <li><a href="/Travel/index.php">Home</a></li>
        <li><a href="/Travel/about.php">About</a></li>
        <li><a href="/Travel/services.php">Services</a></li>
        <li><a href="/Travel/contact.php">Contact</a></li>
    </ul>


    <div class="nav-buttons">
        <a href="/Travel/book-cab.php" class="book-btn">Book Cab</a>
        <a href="/Travel/login.php" class="login-btn">Login / Register</a>
    </div>

</nav>


<script>
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const navButtons = document.querySelector(".nav-buttons");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    navButtons.classList.toggle("active");
});
</script>