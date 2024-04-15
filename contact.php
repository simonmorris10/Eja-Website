<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Transfer Solution</title>
  <link rel="stylesheet" href="CSS\style.css">

</head>
<body>

  <!-- <header>
    <h1>Header sectioin starts</h1>
  </header> -->

  <nav>
    <!-- <label for="title">Start Transfer Solution</label> -->
    <a id="open" onClick="openLink()" href="">+</a>
    <a id="close" onclick="closeLink()" href="">-</a>
    <ul>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <a href="#gallery">Gallery</a>
    </ul>
  </nav>

  <section id="home" class="home">
  <div class="contentc">
            <h1>Welcome to Money Transfer Solution in Juba</h1><br><br>
            <p>We provide safe, reliable, and convenient money transfer services in Juba, South Sudan.</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
  </section>


<!--About section start  -->
<section id="about" class="contentx">
  <h2>ABOUT US</h2><br><br>
  <div class="content">
    <div class="text">
      <div class="article">
        <h2>At Start Transfer Solution,</h2>
        <p>We are committed to facilitating seamless financial transactions for individuals and businesses in Juba. Our team works tirelessly to ensure that your money transfer needs are met efficiently and securely.</p>
        <a href="" class="btn">Read More</a>
      </div>
    </div>
    <div class="img-sec">
      <img src="IMG\2.jpg" width="499px" alt="">
    </div>
    <div class="social-handles">
      <ul>
        <li><a href="#"><img src="IMG\f.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="IMG\t.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="IMG\i.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="IMG\l.png" alt="LinkedIn"></a></li>
      </ul>
    </div>
  </div>
</section>



  <!-- About section end -->

<!-- Contact section start -->
<section id="contact" class="contentx">
  <h2>Contact Us</h2>
  <div class="contact-info">
    <div class="contact-item">
      <h3>Address</h3>
      <p>Custom Main Street, Juba</p>
    </div>
    <div class="contact-item">
      <h3>Phone</h3>
      <p>+211 945 858 362</p>
    </div>
    <div class="contact-item">
      <h3>Email</h3>
      <p>info@starttransfersolution.com</p>
    </div>
  </div>
  <form id="contact-form" action="send.php" method="POST">
    <div class="form-group">
       Name:  <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
       Email: <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
       Message: <textarea id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn" onclick="sendMessage()">Send Message</button>
  </form>
</section>

<!-- Contact section end -->

<!-- Gallery section start -->
<section id="gallery">
  <h2>Gallery Section</h2>
  <div class="gallery">
    <div class="gallery-item">
      <img src="IMG\3.jpg" id="sliderImage" alt="Placeholder Image 1">
    </div>
    <div class="gallery-item">
      <img src="IMG\7.jpg" alt="Placeholder Image 2">
    </div>
    <div class="gallery-item">
      <img src="IMG\8.jpg" alt="Placeholder Image 3">
    </div>
    <div class="gallery-item">
      <img src="IMG\2.jpg" alt="Placeholder Image 4">
    </div>
    <div class="gallery-item">
      <img src="IMG\1.jpg" alt="Placeholder Image 5">
    </div>
    <div class="gallery-item">
      <img src="IMG\4.jpg" alt="Placeholder Image 6">
    </div>
    <div class="gallery-item">
      <img src="IMG\2.jpg" alt="Placeholder Image 4">
    </div>
    <div class="gallery-item">
      <img src="IMG\1.jpg" alt="Placeholder Image 5">
    </div>
    <div class="gallery-item">
      <img src="IMG\4.jpg" alt="Placeholder Image 6">
    </div>
    <button id="nextBtn">Next</button>
    <button id="prevBtn">Prev</button>
  </div>
</section>

<!-- Gallery section end -->

<!-- Footer section start -->
<footer>
  <div class="footer-content">
    <div class="footer-logo">
      <img src="logo.png" alt="Start Transfer Solution Logo">
      <h3>Start Transfer Solution</h3>
    </div>
    <div class="footer-links">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#gallery">Gallery</a></li>
      </ul>
    </div>
    <div class="footer-contact">
      <h4>Contact Us</h4>
      <p>Custom Main Street, Juba</p>
      <p>+211 945 858 362</p>
      <p>info@starttransfersolution.com</p>
    </div>
    <div class="footer-social">
      <h4>Follow Us</h4>
      <ul>
        <li><a href="#"><img src="IMG\f.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="IMG\t.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="IMG\i.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="IMG\l.png" alt="LinkedIn"></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Start Transfer Solution. All rights reserved.</p>
  </div>
</footer>

<!-- Footer section end -->
 
<script src="index.js"></script>
</body>
</html>
