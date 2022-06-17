<?php

session_start();

if (!isset($_SESSION['unique_id'])) {
  header("Location: loginPage.php");
}

include_once "assets/php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
  $user_data = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="assets/resources//icon.png">

  <title>Play & Learn</title>
  <link rel="stylesheet" href="assets/css/header.css" />
  <link rel="stylesheet" href="assets/css/footer.css" />
  <link rel="stylesheet" href="assets/css/funfact.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <script src="https://kit.fontawesome.com/47b68a28dc.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <div id="wrapper_Header">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo"></div>
        <a href="index.php">
          <img id="logo" src="assets\\resources\\logo_white.png" alt="logo">
        </a>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="funFact.php">Fun Fact</a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="quiz1.php">Quiz</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
      </div>
      <?php if ($user_data['user_name'] != null) : ?>
        <div>
          <a class="cta" href="ChatSystem\chat.php"><i class='fas fa-comment' style='font-size:15px;color:#CBFBFF; margin-right:10px'></i></a>
          <?php echo "<font color='#CBFBFF' size='4'>" . $user_data['user_name'] . "</font>"; ?>
        </div>
        <a class="cta" href="logout.php"><button id="btn_SignIn" style="height:35px;width:120px;border-radius:20px">Log Out</button></a>
      <?php else : ?>
        <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <?php endif; ?>
    </nav>
  </div>
  <!-- ======= Header ======= -->
  <section style="background: rgb(6, 6, 18)">
    <!-- ======= Image ======= -->
    <div class="fun_fact_class">
      <img class="fun_fact_img" src="assets/resources/fun_fact.jpg" />
    </div>
    <!-- ======= Image ======= -->

    <!-- ======= Slideshow ======= -->
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="assets/resources/ff1.png" style="width: 100%" />
      </div>

      <div class="mySlides fade">
        <img src="assets/resources/ff2.png" style="width: 100%" />
      </div>

      <div class="mySlides fade">
        <img src="assets/resources/ff3.png" style="width: 100%" />
      </div>
    </div>
    <br />

    <div style="text-align: center; padding-bottom:50px">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }
    </script>
    <!-- ======= Slideshow ======= -->

    <!-- ======= Test Box ======= -->
    <section class="text_section" style="background: rgb(6, 6, 18)">
      <div>
        <h2 style="
              background: -webkit-linear-gradient(
                rgb(255, 255, 255),
                rgb(4, 121, 217)
              );
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              font-size: 40px;
              font-family: Rockwell;
            ">
          Your nostrils work one at a time.
        </h2>
        <p id="rcorners1" style="
              color: white;
              font-size: 25px;
              text-align: justify;
              margin-top: 20px;
            ">
          When we breathe in and out of our nose during the day, one nostril
          does most of the work at a time, with the duties switching every
          several hours. This "nasal cycle" is dictated by the same autonomic
          nervous system that regulates heart rate, digestion, and other
          unconscious bodily functions and is the reason why—when our nose
          gets stuffed up—it does so one nostril at a time.
        </p>
      </div>

      <div>
        <h2 style="
              background: -webkit-linear-gradient(
                rgb(255, 255, 255),
                rgb(182, 161, 0)
              );
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              font-size: 40px;
              font-family: Rockwell;
              margin-top: 120px;
            ">
          Hair and nails grow faster during pregnancy.
        </h2>
        <p id="rcorners2" style="
              color: white;
              font-size: 25px;
              text-align: justify;
              margin-top: 20px;
            ">
          A surprising side effect of pregnancy is that nails and hair grow
          faster than usual. This is due to changes in hormones as well as
          increased blood circulation and metabolism supplying nutrients.
          According to Amy O'Connor, writing for What to Expect, a pregnant
          person's hair also "might feel thicker and look more shiny and
          healthy than usual." Though she warns that it can occasionally mean
          that the expecting "may suddenly sprout strands in places [they'd]
          rather not."
        </p>
      </div>
      <div style="padding-bottom: 50px;">
        <h2 style="
              background: -webkit-linear-gradient(
                rgb(255, 255, 255),
                rgb(222, 0, 115)
              );
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              font-size: 40px;
              font-family: Rockwell;
              margin-top: 120px;
            ">
          You lose up to 30 percent of your taste buds during flight.
        </h2>
        <p id="rcorners3" style="
              color: white;
              font-size: 25px;
              text-align: justify;
              margin-top: 20px;
            ">
          This might explain why airplane food gets such a bad reputation. The
          elevation in an airplane can have a detrimental effect on our
          ability to taste things. According to a 2010 study conducted by
          Germany's Fraunhofer Institute for Building Physics, the dryness
          experienced at a high elevation as well as low pressure reduces the
          sensitivity of a person's taste buds to sweet and salty foods by
          about 30 percent. Add that dry cabin air affects our ability to
          smell, and our ability to taste is reduced further.
        </p>
      </div>
    </section>
    <!-- ======= Test Box ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container_footer">
        <div class="row_footer">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Fun Fact</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">Quiz</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li>
                <i class="fa-solid fa-location-dot"></i>Faculty of Computer
                Science and Information Technology, Universiti Malaya
              </li>
              <li>
                <i class="fa-solid fa-envelope"></i>play_and_learn@gmail.com
              </li>
              <li><i class="fa-solid fa-phone"></i>+60 153541764</li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      <p class="copyright">Copyright © 2021. All Right Reserved</p>
    </footer>
    <!-- ======= Footer ======= -->
  </section>
</body>

<script type="text/javascript">
  window.addEventListener("scroll", function() {
    var header = document.getElementById("wrapper_Header");
    header.classList.toggle("sticky", window.scrollY > 0);

    if (window.scrollY == 0) {
      document.getElementById("logo").src = "assets\\resources\\logo_white.png";
    } else {
      document.getElementById("logo").src = "assets\\resources\\logo_black.png";
    }
  })
</script>

</html>