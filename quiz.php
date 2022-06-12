<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play & Learn</title>
    <link rel="stylesheet" href="assets/css/quiz_Ques.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <script type="text/javascript" src="assets/javascript/quiz.js"></script>
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
            <a class="cta" href="loginPage.html"><button id="btn_SignIn">Sign In</button></a>
        </nav>
    </div>

    <div class="modal-bg">
        <div class="modal-content">
            <p>1. The quiz contain olny 2 question</p>
            <p>2. You have 1 minute to answer all the question</p>
            <p>3. 1 questain cointain 1 mark</p>
            <a href="#" id="start_btn" class="btn_start" onclick="startQuiz()">Start</a>
        </div>
    </div>

    <div class="time-bg">
            <div class="time-content">
                <p id="countdown">1:00</p>
            </div>
        </div>

    <div id="quiz">
        <form id="form" action="score.php" method="get">
            <div class="wrapper1">
                <p class="question">1. Which relation is NOT a function?</p>
                <input type="radio" name="q1" id="option-1" value="{(1,-5), (3,1), (-5,4), (4,-2)}">
                <input type="radio" name="q1" id="option-2" value="{(2,7), (3,7), (4,7), (5,8)}">
                <input type="radio" name="q1" id="option-3" value="{(3,-2), (5,-6), (7,7), (8,8)}">
                <input type="radio" name="q1" id="option-4" value="{(1,-5), (-1,6), (1,5), (6,-3)}">
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>{(1,-5), (3,1), (-5,4), (4,-2)}</span>
                </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>{(2,7), (3,7), (4,7), (5,8)}</span>
                </label>
                <label for="option-3" class="option option-3">
                    <div class="dot"></div>
                    <span>{(3,-2), (5,-6), (7,7), (8,8)}</span>
                </label>
                <label for="option-4" class="option option-4">
                    <div class="dot"></div>
                    <span>{(1,-5), (-1,6), (1,5), (6,-3)}</span>
                </label>
            </div>

            <div class="wrapper2">
                <p class="question">2. All of the x values or inputs are called what?</p>
                <input type="radio" name="q2" id="option-5" value="Domain">
                <input type="radio" name="q2" id="option-6" value="Function">
                <input type="radio" name="q2" id="option-7" value="Range">
                <input type="radio" name="q2" id="option-8" value="Relation">
                <label for="option-5" class="option option-5">
                    <div class="dot"></div>
                    <span>Domain</span>
                </label>
                <label for="option-6" class="option option-6">
                    <div class="dot"></div>
                    <span>Function</span>
                </label>
                <label for="option-7" class="option option-7">
                    <div class="dot"></div>
                    <span>Range</span>
                </label>
                <label for="option-8" class="option option-8">
                    <div class="dot"></div>
                    <span>Relation</span>
                </label>
            </div>
            <!--<div class="content" data-aos="fade-up" data-aos-delay="300">
                <p class="question">1. Which relation is NOT a function?</p>
                <p class="answer"><input type="radio" name="question1" value="{(1,-5), (3,1), (-5,4), (4,-2)}">{(1,-5), (3,1), (-5,4), (4,-2)}</p>
                <p class="answer"><input type="radio" name="question1" value="{(2,7), (3,7), (4,7), (5,8)}">{(2,7), (3,7), (4,7), (5,8)}</p>
                <p class="answer"><input type="radio" name="question1" value="{(3,-2), (5,-6), (7,7), (8,8)}">{(3,-2), (5,-6), (7,7), (8,8)}</p>
                <p class="answer"><input type="radio" name="question1" value="{(1,-5), (-1,6), (1,5), (6,-3)}">{(1,-5), (-1,6), (1,5), (6,-3)}</p>
            </div>

            <div class="content1" data-aos="fade-up" data-aos-delay="300">
                <p class="question">2. All of the x values or inputs are called what?</p>
                <p class="answer"><input type="radio" name="question2" value="Domain">Domain</p>
                <p class="answer"><input type="radio" name="question2" value="Function">Function</p>
                <p class="answer"><input type="radio" name="question2" value="Range">Range</p>
                <p class="answer"><input type="radio" name="question2" value="Relation">Relation</p>
            </div>-->
            <div class="submit">
                <input type="submit" id="btn_submit" class="btn_submit" value="Submit">
            </div>
        </form>
    </div>

    <?php
    $correct = 0;
    if (isset($_GET["q1"])) {
        $answer1 = $_GET["q1"];
        if ($answer1 == "{(1,-5), (-1,6), (1,5), (6,-3)}") {
            $correct++;
        }
    }
    if (isset($_GET["q2"])) {
        $answer2 = $_GET["q2"];
        if ($answer2 == "Domain") {
            $correct++;
        }
    }
    ?>

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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="assets/javascript/quiz2.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>

</html>