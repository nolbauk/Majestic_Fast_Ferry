<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/majestic.png" />
  <title>Landing Page</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <nav>
    <div class="container">
      <img src="assets/logo2.png" alt="" />
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
      </ul>
    </div>
  </nav>
  <div class="hero-section">
    <div class="container">
      <h2>The Perfect Journey</h2>
      <p>Decided on your schedule!</p>
      <a href="#" class="btn">Learn More</a>
    </div>
  </div>
  <div class="slides">
    <div class="slide">
      <img src="assets/1.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/2.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/3.jpg" alt="">
    </div>
    <div class="slide">
      <img src="assets/4.jpg" alt="">
    </div>
    <div class="navigation">
      <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
      <a class = "next" onclick = "plusSlides(+1)">&#10095;</a>
    </div>
  </div>
  <div class="content-section">
    <div class="container">
      <h2>Copyright © 2024 Majestic Fast Ferry Pte Ltd. All rights reserved</h2>
    </div>
  </div>
  <script src="javascript/carousel.js"></script>
</body>
</html>
