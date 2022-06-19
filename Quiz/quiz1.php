<?php

session_start();

if (!isset($_SESSION['unique_id'])) {
    header("Location: ../Log_In/loginPage.php");
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

    <link rel="icon" href="../assets/resources//icon.png">

    <title>Quiz</title>
    <link rel="stylesheet" href="../assets/css/quiz.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
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

    <!-- ======= Slideshow ======= -->
    <div class="slideshow" style="margin-top: 50px;">
        <div class="mySlides fade">
            <p><img src="../assets/resources/quiz.png" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz?</h1>
            <h2>Life is ambiguous; there are many right answers-
                all depending on what you’re looking for. But if you think there is only one right answer, then you’ll
                stop looking as soon as you find one.”<br><br>~ Roger von Oech</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>

        <div class="mySlides fade">
            <p><img src="../assets/resources/quiz.png" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz?</h1>
            <h2>“My friend said to me, You know what I like? Mashed potatoes. I was like, Dude, you
                have to give me time to guess. If you’re going to quiz me you have to insert a pause.”<br><br>~
                Mitch Hedberg</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>

        <div class="mySlides fade">
            <p><img src="../assets/resources/quiz.png" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz?</h1>
            <h2>“Thou shalt not answer questionnaires Or quizzes upon world affairs, Nor with compliance
                Take any test. Thou shalt not sit with statisticians nor commit A social science.”<br><br>~
                W. H. Auden</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <div id="quiz">
        <div class="content" data-aos="fade-up" data-aos-delay="300" style="padding-top: 80px;">
            <a href="#" class="button"><img src="../assets/resources/subject1.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject2.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject3.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject4.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject5.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject6.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject7.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="../assets/resources/subject8.png" class="image" alt=""></a>
        </div>
    </div>

    <div class="modal-bg">
        <div class="modal-content">
            <div class="close">+</div>
            <h1>Select a Chapter to Start</h1>
            <a href="quiz.php"><img src="../assets/resources/chapter1.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter2.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter3.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter4.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter5.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter6.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter7.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="../assets/resources/chapter8.png" class="image" alt=""></a>
        </div>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Fun_Fact/funFact.php">Fun Fact</a></li>
                        <li><a href="Forum/forum.php">Forum</a></li>
                        <li><a href="Quiz/quiz1.php">Quiz</a></li>
                        <li><a href="Contact_Us/contact_us.php">Contact Us</a></li>
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="../assets/javascript/quiz.js"></script>

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
            dots[i].className = dots[i].className.replace("active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 5 seconds
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

</html>