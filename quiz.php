<?php

session_start();
include("assets/php/config.php");
include("function.php");

$user_data = check_login($conn);
$username = $user_data['user_name'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $answer1 = $_POST['q1'];
    $answer2 = $_POST['q2'];
    $correct = 0;
    $date = date("jS \of F Y");
    $time = date("h:i:s A");
    if (isset($_POST["q1"])) {
        $answer1 = $_POST["q1"];
        if ($answer1 == "{(1,-5), (-1,6), (1,5), (6,-3)}") {
            $correct++;
        }
    }
    if (isset($_POST["q2"])) {
        $answer2 = $_POST["q2"];
        if ($answer2 == "Domain") {
            $correct++;
        }
    }

    if (!empty($answer1) && !empty($answer2)) {
        // save to database;
        $query = "INSERT INTO leaderboard(Username, Question1, Question2, Score, Date, Time) VALUES ('$username', '$answer1', '$answer2', '$correct', '$date' ,'$time')";

        mysqli_query($conn, $query);

        header("Location: score.php");
    } else {
        echo "Please enter some valid information.";
    }

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if (mysqli_num_rows($sql) > 0) {
        $user_data = mysqli_fetch_assoc($sql);
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

    <title>Play & Learn</title>
    <link rel="stylesheet" href="assets/css/quiz_Ques.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <script type="text/javascript" src="assets/javascript/quiz.js"></script>
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

    <section>
        <div class="modal-bg">
            <div class="modal-content">
                <h1 style="margin-top: 35px; margin-bottom: 40px; font-size: 40px;">Instruction</h1>
                <p>1. The quiz contains only two questions.<br>2. You have one minute to answer all the questions.<br>3. One question cointains one mark.<br>4. No mark given if you did not click submit.</p>
                <a href="#" id="start_btn" class="btn_start" onclick="startQuiz()">Start</a>
            </div>
        </div>

        <div class="time-bg">
            <div class="time-content">
                <p id="countdown">1:00</p>
            </div>
        </div>

        <div id="quiz">
            <form id="form" method="post">
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
                <div class="submit">
                    <input type="submit" id="btn_submit" class="btn_submit" value="Submit">
                </div>
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="assets/javascript/quiz2.js"></script>

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