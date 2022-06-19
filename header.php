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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="assets/resources//icon.png">

  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
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
            <a href="logout.php">Log Out</a>
            <!-- Log out not functioning -->
          </div>
        </div>
      <?php else : ?>
        <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <?php endif; ?>
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <div>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
      dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
      veritatis ipsam eligendi minus.
    </p>

    <br>

    <br>
    <!-- <div>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi impedit quo rem repudiandae quae cumque soluta nulla
        dicta totam inventore molestiae ipsum fugit vero eveniet consectetur,
        veritatis ipsam eligendi minus.
      </p>

      <br>
    </div> -->
  </div>

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