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
  $forum_id =  $_POST['forum_id'];

  $query = "SELECT * FROM forum WHERE forum_id = '$forum_id' LIMIT 1";
  $resultForum = mysqli_query($conn, $query);

  if (mysqli_num_rows($resultForum) > 0) {
    $this_forum_data = mysqli_fetch_assoc($resultForum);
  }

  ?>

  <section class="forum">
    <div class="content_forum">
      <h2>Forum Details</h2>
      <a href="forum.php" class="button_forum"> Back </a>
    </div>
    <div class="box_forum">
      <h3><?php echo $this_forum_data['forum_title']; ?></h3>
      <p><?php echo $this_forum_data['forum_message']; ?>
      </p>
      <p><?php echo $this_forum_data['forum_id']; ?>
      </p>
      <p><?php echo $this_forum_data['author_username']; ?>
      </p>
      <br>
    </div>

    <div class="NewForumForm">

      <form class="inputBox" action="addForumComment.php" method="post">
        <h2>Add Comments:</h2>
        <br>
        <input type="text" class="input-field" name="forum_replies_message" placeholder="Comment Here" required>
        <input type="hidden" name="forum_id" value="<?php echo $this_forum_data['forum_id']; ?>" />
        <input type="hidden" name="author_username" value="<?php echo $this_forum_data['author_username']; ?>" />
        <button type="submit" class="button_forum">Submit</button>
      </form>

    </div>

    <?php
    $forum_id = $this_forum_data['forum_id'];
    $query = "SELECT * FROM forum_replies WHERE forum_id = '$forum_id' ";
    $resultForumReplies = mysqli_query($conn, $query);
    $forum_replies_data = array();
    if (mysqli_num_rows($resultForumReplies) > 0) {
      while ($row = mysqli_fetch_assoc($resultForumReplies)) {
        $forum_replies_data[] = $row;
      }
    }
    ?>

    <div class="box_forum">
      <h4>Comments: </h4>
      <br>
      <?php
      //if(mysqli_num_rows($resultForumReplies) > 0){
      //while($row = mysqli_fetch_assoc($resultForumReplies)){
      //          echo $forum_replies_data['forum_replies_username'];
      //        echo $forum_replies_data['forum_replies_time'];
      //          echo $forum_replies_data['forum_replies_message'];
      //     }
      //}
      // else{
      // echo "No comments yet.";
      //}
      foreach ($forum_replies_data as $data) {
        echo $data['forum_replies_username'];
        echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
        echo $data['forum_replies_time'];
        echo "<br>";
        echo $data['forum_replies_message'];
        echo "<br>";
        echo "<br>";
      }
      ?>
      <br>
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