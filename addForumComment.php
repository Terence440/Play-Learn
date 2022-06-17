<?php

session_start();
include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $forum_replies_message = $_POST['forum_replies_message'];
  $forum_id =  $_POST['forum_id'];
  $author_username =  $_POST['author_username'];
  // save to database;
  $query = "INSERT INTO forum_replies(forum_id, forum_replies_username, forum_replies_message) VALUES ('$forum_id', '$author_username', '$forum_replies_message')";

  mysqli_query($con, $query);

  header("Location: forumDetails.php");
} else {
  echo "Please enter some valid information.";
}

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
  <link type="text/css" href="assets/css/sample.css" rel="stylesheet" media="screen" />
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

  <script src="ckeditor.js"></script>

  <script>
    ClassicEditor
      .create(document.querySelector('#editor'), {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
      })
      .then(editor => {
        window.editor = editor;
      })
      .catch(err => {
        console.error(err.stack);
      });
  </script>
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