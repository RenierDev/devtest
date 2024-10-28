<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Test Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>My Test Page</h1>
        <p>Show me what you got</p>
    </header>

    <nav>
        <a href="#section1">Section 1</a>
        <a href="#section2">Section 2</a>
        <a href="#section3">Section 3</a>
    </nav>

    <section id="section1">
        <h2>Section 1: Introduction</h2>
        <p>
            Welcome to the Dev Test <b>Page</b>. This is a simple <b>page</b> that you can use to test your web <em>development</em> skills.
        </p>
    </section>

    <section id="section2">
        <h2>Section 2: An unordered list</h2>
        <!-- add list here -->
        <ul>
            <li>Mikasa Ackerman</li>
            <li>Finn the human</li>
            <li>Shanks</li>
            <li>Gojo Satoru</li>
            <li>Vash the Stampede</li>
        </ul>

    </section>

    <section id="section3">
        <h2>Section 3: An image slider</h2>
        <!-- add slider here -->
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="images">
    <div class="numbertext">1 / 5</div>
    <img src="images/Mikasa.png" style="width: 400px; height: 600px">
    <div class="text">Mikasa Ackerman</div>
  </div>

  <div class="images">
    <div class="numbertext">2 / 5</div>
    <img src="images/Finn.png" style="width: 400px; height: 600px">
    <div class="text">Finn the Human</div>
  </div>

  <div class="images">
    <div class="numbertext">3 / 5</div>
    <img src="images/Shanks.png" style="width: 400px; height: 600px">
    <div class="text">Shanks</div>
  </div>

  <div class="images">
    <div class="numbertext">4 / 5</div>
    <img src="images/Gojo.png" style="width: 400px; height: 600px">
    <div class="text">Gojo Satoru</div>
  </div>

  <div class="images">
    <div class="numbertext">5 / 5</div>
    <img src="images/Vash.png" style="width: 400px; height: 600px">
    <div class="text">Vash the Stampede</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
    </section>

    <footer>
        <p>&copy; 2024 Dev Test. All rights reserved.</p>
    </footer>
    <script src="./main.js"></script>
</body>

</html>