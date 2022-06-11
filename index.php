<?php

    session_start();
    include("connection.php");
    include("function.php");

    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="assets\css\swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  <link rel="stylesheet" type="text/css" href="assets/css/function.css">
  <link rel="stylesheet" type="text/css" href="assets/css/meetUs-V3.css">

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
          <li><a href="forum.html">About</a></li>
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
      <a class="cta" href="logout.php"><button id="btn_SignIn">Log Out</button></a>
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <!-- ======= Content ======= -->
  <section id="content_Home">
    <div class="container_Home">
      <div class="row_Home" style="justify-content: center;">
        <h1>Welcome, <?php echo $user_data['user_name']; ?></h1>
        <img class="play_and_learn" src="assets/resources/play_and_learn.jpg" alt="play_and_learn">
      </div>
    </div>

    <!-- Functions -->
    <section id="Functions">
      <div class="slide-container swiper">
        <h1>Functions</h1>
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="assets/resources/forum.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile2.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile3.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile4.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile5.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile6.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile7.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile8.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/profile9.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">David Dell</h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Functions -->

    <!-- Meet Us -->
    <section id="Meet_Us">
      <div class="container_MeetUs">
        <h1>Meet Us</h1>
        <input type="radio" name="dot_MeetUs" id="one">
        <input type="radio" name="dot_MeetUs" id="two">
        <div class="main-card_MeetUs">
          <div class="cards_MeetUs">
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="images/img1.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Andrew Neil</div>
                  <div class="job_deatilsMeetUs">Web Designer</div>
                </div>
                <div class="media-icons_MeetUs">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="images/img1.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Andrew Neil</div>
                  <div class="job_deatilsMeetUs">Web Designer</div>
                </div>
                <div class="media-icons_MeetUs">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="images/img1.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Andrew Neil</div>
                  <div class="job_deatilsMeetUs">Web Designer</div>
                </div>
                <div class="media-icons_MeetUs">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="cards_MeetUs">
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="images/img1.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Andrew Neil</div>
                  <div class="job_deatilsMeetUs">Web Designer</div>
                </div>
                <div class="media-icons_MeetUs">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="images/img1.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Andrew Neil</div>
                  <div class="job_deatilsMeetUs">Web Designer</div>
                </div>
                <div class="media-icons_MeetUs">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button_MeetUs">
          <label for="one" class="one active"></label>
          <label for="two" class="two"></label>
        </div>
      </div>
    </section>
    <!-- Meet Us -->

    <!-- Footer -->
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
    <!-- Footer -->

  </section>

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

<!-- Swiper JS -->
<script src="assets\js\swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
      1350: {
        slidesPerView: 4,
      }
    },
  });
</script>

</html>