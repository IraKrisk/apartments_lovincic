<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent = "From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "irakriskovic@gmail.com";
$subject = "Guest&#39;s Request";
$mailheader = "From: Apartments Lovincic Contact Form \n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error, please try again.");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartments Lovincic Baska</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB"
    crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Kalam:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>
  <header>
    <div id="header-content" class="header-content">
      <div id="menu-open" class="mob-icon menu-open"><i class="fas fa-bars fa-2x"></i></div>
      <h1><a href="index.html">Apartments Lovincic Baska</a></h1>
    </div>
    <nav id="menu" class="menu">
      <div id="languages" class="languages">
        <img src="images/flags/uk.png" alt="English">
        <img src="images/flags/hr.png" alt="Croatian">
        <div id="menu-close" class="menu-close"><i class="fas fa-times fa-2x"></i></div>
      </div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="apartments.html">Apartments</a></li>
        <li><a href="location.html">Location</a></li>
        <li><a href="baska.html">Baska</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="facebook"><a href="https://www.facebook.com/apartments.lovincic.baska"><i class="fab fa-facebook-square fa-2x"></i></a></li>
      </ul>
    </nav>
    <div class="home-img"></div>
  </header>
  <main>
    <p class="success-msg">Thank you for contacting us. We will get back to you shortly.</p>
    <div class="apartment-list">
      <figure>
        <a href="apartments/apartment1.html"><img src="images/baska-mobile.jpg" alt="Apartman 1"></a>
        <figcaption>
          <h4>Apartman 1</h4>
          <p>4 - 6 osobe</p>
        </figcaption>
      </figure>
      <figure>
        <a href="apartments/apartment2.html"><img src="images/baska-mobile.jpg" alt="Apartman 2"></a>
        <figcaption>
          <h4>Apartman 2</h4>
          <p>4 - 6 osobe</p>
        </figcaption>
      </figure>
      <figure>
        <a href="apartments/apartment3.html"><img src="images/baska-mobile.jpg" alt="Apartman 3"></a>
        <figcaption>
          <h4>Apartman 3</h4>
          <p>4 - 6 osobe</p>
        </figcaption>
      </figure>
      <figure>
        <a href="apartments/apartment4.html"><img src="images/baska-mobile.jpg" alt="Apartment 4"></a>
        <figcaption>
          <h4>Apartment 4</h4>
          <p>4 - 6 osobe</p>
        </figcaption>
      </figure>
      <figure>
        <a href="apartments/studio1.html"><img src="images/baska-mobile.jpg" alt="Studio 1"></a>
        <figcaption>
          <h4>Studio 1</h4>
          <p>2 osobe</p>
        </figcaption>
      </figure>
      <figure>
        <a href="apartments/studio2.html"><img src="images/baska-mobile.jpg" alt="Studio 2"></a>
        <figcaption>
          <h4>Studio 2</h4>
          <p>2 osobe</p>
        </figcaption>
      </figure>
    </div>
  </main>
  <footer>
    <article class="footer-address">
      <h3>Apartments Lovincic</h3>
      <p class="address-line"><i class="fas fa-map-marked-alt"></i>Zarok 27, Baska, Croatia</p>
      <p class="address-line"><i class="far fa-envelope"></i>apartments.lovincic&#64;gmail.com</p>
      <p class="address-line"><i class="fas fa-phone"></i>+385 99 2963 007</p>
    </article>
    <article class="footer-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1445406.6363595063!2d13.623068582528523!3d44.9627771548583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47639fe6302fc419%3A0x853d8a79f267b357!2sZarok+27%2C+51523%2C+Ba%C5%A1ka%2C+Croatia!5e0!3m2!1sen!2sie!4v1539366208026" width="100%" height="120"  allowfullscreen></iframe>
    </article>
    <article class="footer-contact">
        <a href="contact.html">Contact</a>
    </article>
    <article class="footer-facebook">
        <a href="https://www.facebook.com/apartments.lovincic.baska"><i class="fab fa-facebook-square fa-3x"></i></a>
    </article>
  </footer>
  <script src="script.js"></script>
</body>
</html>






