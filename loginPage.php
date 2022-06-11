<?php

session_start();
include("connection.php");
include("function.php");

// $user_data = check_login($con);
// Register
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password) && !empty($user_email) && !is_numeric($user_name)) {
    // save to database;
    $user_id = random_num(20);
    $query = "INSERT INTO users (user_id, user_name, user_email, password) VALUES ('$user_id', '$user_name', '$user_email' , '$password')";

    mysqli_query($con, $query);

    header("Location: loginPage.php");
  } else {
    echo "Please enter some valid information.";
  }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
    // save to database;
    $user_id = random_num(20);
    $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";

    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        // Save the data into an array
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }
    echo "Please enter some valid information.";
  } else {
    echo "Please enter some valid information.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Play & Learn</title>

  <link rel="stylesheet" type="text/css" href="assets/css/loginPage.css">
  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/47b68a28dc.js" crossorigin="anonymous"></script>
</head>

<body>
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
          <li><a href="funFact.html">About</a></li>
          <li>
            <a href="#" class="desktop-link">Features</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Feedback</a></li>
        </ul>
      </div>
      <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <a class="cta" href="loginPage.php"><button id="btn_SignIn">Log Out</button></a>
    </nav>
  </div>

  <section class="hero">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>
      <div class="social-icons">
        <img src="assets/resources/fb.png">
        <img src="assets/resources/twit.png">
        <img src="assets/resources/gog.png">
      </div>
      <form id="login" class="input-group" method="post">
        <input type="text" class="input-field" name="user_name" placeholder="User Id" required>
        <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
        <input type="checkbox" class="check-box"><span id="span_loginPage">Remember Password</span>
        <button type="submit" class="submit-btn">Log In</button>
      </form>
      <form id="register" class="input-group" method="post">
        <input type="text" class="input-field" name="user_name" placeholder="User Id" required>
        <input type="email" class="input-field" name="user_email" placeholder="Email Id" required>
        <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
        <input type="checkbox" class="check-box"><span id="span_loginPage">I agree to the terms &
          conditions</span>
        <button type="submit" class="submit-btn">Register</button>
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
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register() {
    x.style.left = "-400px";
    y.style.left = "100px";
    z.style.left = "164px";
  }

  function login() {
    x.style.left = "100px";
    y.style.left = "850px";
    z.style.left = "0px";
  }
</script>

</html>