<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play & Learn</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="subject/" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/47b68a28dc.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="nav_links">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="logo_white.png" alt="logo">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Fun Fact</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Quiz</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
            </ul>

            <a class="cta" href="loginPage.html"><button id="btn_SignIn">Sign In</button></a>
        </nav>
    </header>

    <div id="quiz">
        <div class="content" data-aos="fade-up" data-aos-delay="300">
            <form action="quiz.php" method="POST">
                <p>1. Which relation is NOT a function?</p>
                <input type="button" class="btn_answer" name="question1" value="{(1,-5), (3,1), (-5,4), (4,-2)}">
                <input type="button" class="btn_answer" name="question1" value="{(2,7), (3,7), (4,7), (5,8)}">
                <input type="button" class="btn_answer" name="question1" value="{(3,-2), (5,-6), (7,7), (8,8)}">
                <input type="button" class="btn_answer" name="question1" value="{(1,-5), (-1,6), (1,5), (6,-3)}">
            </form>
        </div>
    </div>
    <div id="quiz1">
        <div class="content1" data-aos="fade-up" data-aos-delay="300">
            <form action="quiz.php" method="POST">
                <p>2. All of the x values or inputs are called what?</p>
                <input type="button" class="btn_answer1" name="question1" value="Domain">
                <input type="button" class="btn_answer1" name="question1" value="Function">
                <input type="button" class="btn_answer1" name="question1" value="Range">
                <input type="button" class="btn_answer1" name="question1" value="Relation">
            </form>
        </div>
    </div>

    <div class="submit">
        <input type="submit" id="btn_submit" class="btn_submit" value="Submit" href="#">
    </div>

    <div class="score-bg">
        <div class="score-content">
            <div class="close">+</div>
            <h1>Your Score</h1>
            <h1>Your Previous Score</h1>
            <h1>Your Highest Score</h1>
        </div>
    </div>

    <?php
    $answer1 = "{(1,-5), (3,1), (-5,4), (4,-2)}";
    $answer2 = "Domain";
    $correct = 0;
    if (!empty($_POST)) {
        if ($answer1 == "{(1,-5), (3,1), (-5,4), (4,-2)}") {
            $correct++;
        }
        if ($answer1 == "{(1,-5), (3,1), (-5,4), (4,-2)}") {
            $correct++;
        }
        echo "$correct";
    }
    ?>



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="MyScript.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>

<script>
    var header = document.getElementById("quiz1");
    var btns = header.getElementsByClassName("btn_answer1");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace("active", "");
            }
            this.className += " active";
        });
    }
</script>

<script>
    var header = document.getElementById("quiz");
    var btns = header.getElementsByClassName("btn_answer");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace("active", "");
            }
            this.className += " active";
        });
    }
</script>

</html>