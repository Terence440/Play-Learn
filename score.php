<?php

session_start();
include("connection.php");
include("function.php");

$user_data = check_login($con);
$username = $user_data['user_name'];

$query = "SELECT * FROM leaderboard ORDER BY Score DESC";
$resultLeaderboard = mysqli_query($con, $query);

$query1 = "SELECT * FROM leaderboard WHERE Username = '$username' ORDER BY Date DESC, Time DESC";
$resultPrevious = mysqli_query($con, $query1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play & Learn</title>
    <link rel="stylesheet" href="assets/css/score.css">
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

    <div class="hero">
        <div class="score">
            <h1>Your Score</h1>
            <P><?php if ($previous_data = mysqli_fetch_assoc($resultPrevious)) {
                ?>
                    <?php echo $previous_data['Score']; ?>
                <?php
                }
                ?></p>
            <h1>Your Previous Score</h1>
            <table class="scoreTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($previous_data = mysqli_fetch_assoc($resultPrevious)) {
                    ?>
                        <tr>
                            <td><?php echo $previous_data['Date']; ?></td>
                            <td><?php echo $previous_data['Time']; ?></td>
                            <td><?php echo $previous_data['Score']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="leaderboard">
            <h1>leaderboard</h1>
            <br>
            <table class="leaderboardTable">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($leaderboard_data = mysqli_fetch_assoc($resultLeaderboard)) {
                    ?>
                        <tr>
                            <td><?php echo $leaderboard_data['Username']; ?></td>
                            <td><?php echo $leaderboard_data['Date']; ?></td>
                            <td><?php echo $leaderboard_data['Time']; ?></td>
                            <td><?php echo $leaderboard_data['Score']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="button">
        <a class="button-content" href="quiz.html">Try Again</a>
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="assets/javascript/quiz.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>

</html>