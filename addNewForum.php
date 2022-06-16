<?php

    session_start();
    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    $author_username = $user_data['user_name'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $author_name = $_POST['author_name'];
  $forum_title = $_POST['forum_title'];
  $forum_message = $_POST['forum_message'];

  if (!empty($author_username) && !empty($forum_title) && !empty($forum_message)) {
    // save to database;
    $query = "INSERT INTO forum(author_username, author_name, forum_title, forum_message) VALUES ('$author_username', '$author_name', '$forum_title', '$forum_message')";

    mysqli_query($con, $query);

    header("Location: forum.php");
  } 
  else {
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

  <link rel="icon" href="assets/resources//icon.png">

  <title>Forum</title>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/forum.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link type="text/css" href="assets/css/sample.css" rel="stylesheet" media="screen" />
  <script src="https://kit.fontawesome.com/47b68a28dc.js" crossorigin="anonymous"></script>
</head>

<body>

<<<<<<< HEAD:addNewForum.html
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
          <li><a href="forum.html">Forum</a></li>
          <li><a href="quiz.html">Quiz</a></li>
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
  <section class="forum">
    <div class="content_forum">
      <h2>Add New Forum</h2>
      <a href="forum.html" class="button_forum"> Back </a>
      <br>
    </div>
    <div class="NewForumForm">
      <form>
        <h2>New Forum</h2>
        <br>
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span>Full Name</span>
        </div>
        <br>
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span>Email</span>
        </div>
        <br>
        <div class="inputBox">
          <input type="text" name="" required="required">
          <span>Forum Title</span>
        </div>
        <br>
        <div class="button-group-addfile3239">
          <span class="form-description23993">Attactment*</span><input type="file" name="ffile"
            class="question-ttile3226">
          <br>
          <br>
          <div class="container">
            <div id="editor">
              <textarea name="txtEditor"></textarea>
            </div>
          </div>
          <br>
          <div class="inputBox">
            <input type="submit" name="" value="Submit">
          </div>
      </form>
    </div>
  </section>
=======
    <div id="wrapper_Header">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
            <div class="logo"></div>
            <a href="index.html">
              <img id="logo" src="assets\\resources\\logo_white.png" alt="logo">
            </a>
            <ul class="links">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
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
        </nav>
      </div>
      
		<!-- ======content section/body=====-->
		<section class="forum">
		<div class="content_forum">
            <h2>Add New Forum</h2>
			<a href="forum.php" class="button_forum"> Back </a>
			<br>
    </div>
    
    <div class = "NewForumForm">

          <form class="inputBox" method="post">
                    <h2>New Forum</h2>
					<br>
                    <input type="text" class="input-field" name="author_name" placeholder="Name" required>
					<br>
          <br>
                    <input type="text" class="input-field" name="forum_title" placeholder="Forum Title" required>
					<br>
          <br>
                    <input type="text" class="container" name="forum_message" placeholder="Forum Message" required>
					<br>
          
                    <button type="submit" class="button_forum">Submit</button>
          </form>

    </div>

		</section>
>>>>>>> a0c64d3a92361641d06fc04c1b9a30647b664e88:addNewForum.php

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
  window.addEventListener("scroll", function () {
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