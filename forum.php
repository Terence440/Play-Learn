<?php

session_start();
include("assets/php/config.php");
include("function.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum</title>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/forum.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
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
          <li><a href="funFact.html">Fun Fact</a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="quiz1.php">Quiz</a></li>
          <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
      </div>
      <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <a class="cta" href="logout.php"><button id="btn_SignIn">Log Out</button></a>
      <a class="cta" href="ChatSystem/chat.php"><button id="btn_SignIn">Chat</button></a>
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <!-- ======content section/body=====-->
  <?php
  $query = "SELECT * FROM forum ORDER BY forum_id DESC";
  $resultForum = mysqli_query($conn, $query);
  $forum_data = array();
  if (mysqli_num_rows($resultForum) > 0) {
    while ($row = mysqli_fetch_assoc($resultForum)) {
      $forum_data[] = $row;
    }
  }
  ?>

  <section class="forum">
    <div class="content_forum">
      <h2>Forum</h2>
      <a href="addNewForum.php" class="button_forum"> Add New Forum </a>
    </div>

    <div class="box_forum">

      <h3><a href="forumDetails.php"><?php echo $forum_data[0]['forum_title']; ?></a></h3>
      <p>
        <?php echo $forum_data[0]['forum_message']; ?>
      </p>
      <br>
      <form action="forumDetails.php" method="post">
        <input type="hidden" name="forum_id" value="<?php echo $forum_data[0]['forum_id']; ?>" />
        <button type="submit" class="submit-btn">Read More</button>
      </form>

    </div>

    <div class="box_forum">

      <h3><a href="forumDetails.php"><?php echo $forum_data[1]['forum_title']; ?></a></h3>
      <p>
        <?php echo $forum_data[1]['forum_message']; ?>
      </p>
      <br>
      <form action="forumDetails.php" method="post">
        <input type="hidden" name="forum_id" value="<?php echo $forum_data[1]['forum_id']; ?>" />
        <button type="submit" class="submit-btn">Read More</button>
      </form>

    </div>

    <div class="box_forum">

      <h3><a href="forumDetails.php"><?php echo $forum_data[2]['forum_title']; ?></a></h3>
      <p>
        <?php echo $forum_data[2]['forum_message']; ?>
      </p>
      <br>
      <form action="forumDetails.php" method="post">
        <input type="hidden" name="forum_id" value="<?php echo $forum_data[2]['forum_id']; ?>" />
        <button type="submit" class="submit-btn">Read More</button>
      </form>

    </div>

    <div class="box_forum">

      <h3><a href="forumDetails.php"><?php echo $forum_data[3]['forum_title']; ?></a></h3>
      <p>
        <?php echo $forum_data[3]['forum_message']; ?>
      </p>
      <br>
      <form action="forumDetails.php" method="post">
        <input type="hidden" name="forum_id" value="<?php echo $forum_data[3]['forum_id']; ?>" />
        <button type="submit" class="submit-btn">Read More</button>
      </form>

    </div>

    <div class="box_forum">

      <h3><a href="forumDetails.php"><?php echo $forum_data[4]['forum_title']; ?></a></h3>
      <p>
        <?php echo $forum_data[4]['forum_message']; ?>
      </p>
      <br>
      <form action="forumDetails.php" method="post">
        <input type="hidden" name="forum_id" value="<?php echo $forum_data[4]['forum_id']; ?>" />
        <button type="submit" class="submit-btn">Read More</button>
      </form>

    </div>

  </section>

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
            <li><i class="fa-solid fa-location-dot"></i>Faculty of Computer Science and Information
              Technology, Universiti
              Malaya</li>
            <li><i class="fa-solid fa-envelope"></i>play_and_learn@gmail.com</li>
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
  <script src='plugin.js'></script>
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