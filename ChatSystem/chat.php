<?php

session_start();

if (!isset($_SESSION['unique_id'])) {
  header("Location: loginPage.php");
}

include_once "../assets/php/config.php";
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

  <link rel="icon" href="assets/resources//icon.png"/>

  <title>Chat</title>

  <link rel="stylesheet" href="../assets/css/chatSystem.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/header.css">

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
                    <img id="logo" src="../assets/resources/logo_white.png" alt="logo">
                </a>
                <ul class="links">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../Fun_Fact/funFact.php">Fun Fact</a></li>
                    <li><a href="../Forum/forum.php">Forum</a></li>
                    <li><a href="../Quiz/quiz1.php">Quiz</a></li>
                    <li><a href="../Contact_Us/contact_us.php">Contact Us</a></li>
                </ul>
            </div>
            <?php if ($user_data['user_name'] != null) : ?>
                <div class="dropdown_btnUser">
                    <a href="../ChatSystem/chat.php"><i class='fas fa-comment'></i></a>
                    <?php echo "<font>" . $user_data['user_name'] . "</font>"; ?>
                    <button class="dropbtn_UserArrow" onclick="myFunction()">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content_btnUser" id="myDropdown_btnUser">
                        <a href="../assets/php/logout.php?logout_id=<?php echo $user_data['unique_id'] ?>">Log Out</a>
                        <!-- Log out not functioning -->
                    </div>
                </div>
            <?php else : ?>
                <a class="cta" href="../Log_In/loginPage.php"><button id="btn_SignIn">Sign In</button></a>
            <?php endif; ?>
        </nav>
    </div>
    <!-- ======= Header ======= -->
  <div class="wrapper">
    <div class="row">
      <div class="column">
        <section class="users">
          <?php
          include_once "../assets/php/config.php";
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          }
          ?>
          <header>
            <div class="content">
              <img src="../assets/php/images/<?php echo $row['img']; ?>" alt="">
              <div class="details">
                <?php  ?>
                <span><?php echo $row['user_name']; ?></span>
                <p><?php echo $row['status']; ?></p>
              </div>
            </div>
            <div class="icon_chat">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-solid fa-video"></i>
            </div>
            <!-- <a href="../assets/php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a> -->
          </header>
          <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to seacrh...">
            <button><i class="fas fa-search"></i></button>
          </div>
          <div class="users-list">

          </div>
      </div>
      <div class="column">
        <section class="chat-area">
          <?php
          if (isset($_GET['user_id'])) {
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql_chat = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            if (mysqli_num_rows($sql_chat) > 0) {
              $user_data_chat = mysqli_fetch_assoc($sql_chat);
          ?>
              <header>
                <!-- <a href="#" class="black-icon"><i class="fas fa-arrow-left"></i></a> -->
                <img src="../assets/php/images/<?php echo $user_data_chat['img']; ?>" alt="">
                <div class="details">
                  <span><?php echo $user_data_chat['user_name']; ?></span>
                  <p><?php echo $user_data_chat['status']; ?></p>
                </div>
              </header>

              <div class="chat-box">

              </div>
              <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field-chat" placeholder="Type a message here..." autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
              </form>

            <?php
            }
          } else {
            ?>

            <header>
              <!-- <a href="#" class="black-icon"><i class="fas fa-arrow-left"></i></a> -->
              <div style="height: 450px; margin: 0 auto; display:flex; align-items:center">
                <p style="top: 50%;">No chat is selected..</p>
              </div>
            </header>

          <?php
          }
          ?>
        </section>
      </div>
      </section>
    </div>
  </div>
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
    y.style.left = "50px";
    z.style.left = "110px";
  }

  function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
  }

  // Users Chat Function
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

<script src="../assets/javascript/users.js"></script>
<script src="../assets/javascript/chat.js"></script>

</html>