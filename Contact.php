<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="./css/navbar.css" class="stylesheet">
</head>

<body>
  <div class="burger animate__animated animate__bounceInDown">
    <div class="line animate__animated animate__bounceInDown"></div>
    <div class="line animate__animated animate__bounceInDown"></div>
    <div class="line animate__animated animate__bounceInDown"></div>
  </div>
  <nav class="navbar menu">
    <a href="./index.html" class="neon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Home
    </a>
    <a href="Gallery.html" class="neon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Gallery
    </a>
    <a href="#" class="neon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Faculty
    </a>
    <a href="Contact.php" class="neon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Contact
    </a>
  </nav>
  <!--alert messages start
    <div class="alert-success">
      <span>Message Sent! Thank you for contacting us.</span>
    </div>
    <div class="alert-error">
      <span>Something went wrong! Please try again.</span>
    </div>
    alert messages end-->

      <!--alert messages start-->
      <?php echo $alert; ?>
    <!--alert messages end-->

  <!--contact section start-->
  <section class="farid">
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>39/1, B.B.B. Road, Howrah, WB, India</div>
        <div><i class="fas fa-envelope"></i>Geeky_Nigga13@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 Yeh nahi de sakte</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  </section>
  <!--contact section end-->
  <script src="./js/click.js"></script>
  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>