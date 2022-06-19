<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="../assets/resources/icon.png">

  <title>Log In</title>

  <link rel="stylesheet" href="../assets/css/loginPage.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
        <a href="../index.php">
          <img id="logo" src="..\\assets\\resources\\logo_white.png" alt="logo">
        </a>
        <ul class="links">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../Fun Fact/funFact.php">Fun Fact</a></li>
          <li><a href="../Forum/forum.php">Forum</a></li>
          <li><a href="../Quiz/quiz1.php">Quiz</a></li>
          <li><a href="../Contact_Us/contact_us.php">Contact Us</a></li>
        </ul>
      </div>
      <!-- <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a> -->
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <section class="form_User">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>

      <!-- Log In -->
      <div class="form_L login_Form">
        <form id="login" class="input-group" enctype="multipart/form-data" method="post" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <div class="form-pas"><i class="fas fa-eye"></i></div>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Log In">
          </div>
        </form>
      </div>

      <!-- Sign Up  -->
      <div class="form_S signup">
        <form id="register" class="input-group" method="post" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <div class="form-pas"><i class="fas fa-eye"></i></div>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Sign Up">
          </div>
        </form>
      </div>
      <div class="social-icons">
        <img src="../assets/resources/fb.png">
        <img src="../assets/resources/twit.png">
        <img src="../assets/resources/gog.png">
      </div>
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
      document.getElementById("logo").src = "..\\assets\\resources\\logo_white.png";
    } else {
      document.getElementById("logo").src = "..\\assets\\resources\\logo_black.png";
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

<script>
  const pswrdField = document.querySelector(".form_L input[type='password']",
    ".form_S input[type='password']");
  toggleBtn = document.querySelector(".form-pas i");

  toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
      pswrdField.type = "text";
      toggleBtn.classList.add("active");
    } else {
      pswrdField.type = "password";
      toggleBtn.classList.remove("active");
    }
  }
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

<script src="../assets/javascript/signUp.js"></script>
<script src="../assets/javascript/logIn.js"></script>

</html>