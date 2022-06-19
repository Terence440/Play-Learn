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

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $forum_replies_message = $_POST['forum_replies_message'];
  $forum_id =  $_POST['forum_id'];
  $author_username =  $_POST['author_username'];
  // save to database;
  $query = "INSERT INTO forum_replies(forum_id, forum_replies_username, forum_replies_message) VALUES ('$forum_id', '$user_data[user_name]', '$forum_replies_message')";

  mysqli_query($conn, $query);
} else {
  echo "Please enter some valid information.";
}

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
  $user_data = mysqli_fetch_assoc($sql);
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
        <div class="dropdown_btnUser">
          <a href="ChatSystem\chat.php"><i class='fas fa-comment'></i></a>
          <?php echo "<font>" . $user_data['user_name'] . "</font>"; ?>
          <button class="dropbtn_UserArrow" onclick="myFunction()">
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content_btnUser" id="myDropdown_btnUser">
            <a href="assets/php/logout.php?logout_id=<?php echo $user_data['unique_id'] ?>">Log Out</a>
          </div>
        </div>
      <?php else : ?>
        <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <?php endif; ?>
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <!-- ======content section/body=====-->
  <?php
  // $forum_id =  $_POST['forum_id'];
  $forum_id =  $_GET['forum_id'];

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
      <h3><?php echo $this_forum_data['forum_title'] . " • " . $this_forum_data['author_username'] . " • " . "<i>" . $this_forum_data['forum_time'] . "</i>"; ?></h3>
      <p><?php echo $this_forum_data['forum_message']; ?></p>
      <br>
    </div>

    <div class="box_forum">

      <form class="inputBox" method="post">
        <h4>Comments:</h4>
        <br>
        <textarea placeholder='Add Your Comment' input type="text" class="inputBox" name="forum_replies_message" required></textarea>
        <div class="btn">
          <input type="submit" value='Comment'>
          <button id='clear'>Cancel</button>
        </div>
        <input type="hidden" name="forum_id" value="<?php echo $this_forum_data['forum_id']; ?>" />
        <input type="hidden" name="author_username" value="<?php echo $this_forum_data['author_username']; ?>" />
      </form>
      <br>
      <br>
      <hr>

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
      <?php

      if (mysqli_num_rows($resultForumReplies) > 0) {
        foreach ($forum_replies_data as $data) {
          echo "<br>";
          echo '<h4><b>' . $data['forum_replies_username'] . '</b><i>' . " · " . $data['forum_replies_time'] . '</i></h4>';
          echo "<br>";
          echo "<br>";
          echo '<p>' . $data['forum_replies_message'] . '<p>';
          echo "<br>";
          echo "<hr>";
        }
      } else {
        echo "<br>";
        echo '<h4>' . "No comments yet." . '</h4>';
      }

      ?>
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
  <script src='assets/javascript/plugin.js'></script>
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

<script>
  function myFunction() {
    document.getElementById("myDropdown_btnUser").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn_UserArrow')) {
      var myDropdown = document.getElementsByClassName("dropbtn_UserArrow");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
</script>

</html>