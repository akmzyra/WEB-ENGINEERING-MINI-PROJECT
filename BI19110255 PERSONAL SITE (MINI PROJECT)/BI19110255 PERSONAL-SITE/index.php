<?php
session_start();
include("include/config.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PERSONAL SITE</title>
    <!--
Template 2109 The Card
http://www.tooplate.com/view/2109-the-card
-->
    <!-- load CSS -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/mystyle.css" />
    <!-- Templatemo style -->
  </head>

  <body>
    <!-- Loader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div class="tm-main-container">
      <div class="tm-top-container">
        <!-- Menu -->
        <nav id="tmNav" class="tm-nav">
          <a class="tm-navbar-menu" href="#">Menu</a>
          <ul class="tm-nav-links">
            <li class="tm-nav-item active">
              <a href="#" data-linkid="0" data-align="right" class="tm-nav-link">Intro</a>
            </li>
            <li class="tm-nav-item">
              <a href="#" data-linkid="1" data-align="right" class="tm-nav-link">About</a>
            </li>
            <li class="tm-nav-item">
              <a
                href="#"
                data-linkid="2"
                data-align="middle"
                class="tm-nav-link">PROJECTS</a>
            </li>
            <li class="tm-nav-item">
              <a href="#" data-linkid="3" data-align="left" class="tm-nav-link">Contact</a>
            </li>
             <li class="tm-nav-item">
              <a href="#" data-linkid="4" data-align="left" class="tm-nav-link">SOFTWARE REVIEW</a>
            </li>
            
            <?php 
//login&logout section
  if(isset($_SESSION["UID"])){
    echo '<p style="text-align:right"><b> '. $_SESSION["username"] . '</b> <a href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" align="right"></i>Logout</a>';   
  }
  else {
    echo '<p align="right"><a href="#" data-linkid="5" data-align="left" class="tm-nav-link"><i class="fa fa-sign-in" style="font-size:24px" align="right"></i> Login </a>';
  }

  
?>
          </ul>
        </nav>

        <!-- Site header -->
        <header class="tm-site-header-box tm-bg-dark">
          <h1 class="tm-site-title">PERSONAL SITE</h1>
          <p class="mb-0 tm-site-subtitle">BI19110255</p>
        </header>
      </div>
      <!-- tm-top-container -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Site content -->
            <div class="tm-content">
              <!-- Section 0 Introduction -->
              <section class="tm-section tm-section-0">
                <h2 class="tm-section-title mb-3 font-weight-bold">
                  ♦︎ Introduction ♦︎
                </h2>
                <div class="tm-textbox tm-bg-dark">
                 <p>Name: Akmazyra Faradeena Binti Amran<br></p>
    <p>Matric No: BI19110255<br></p>
    
    <p>Bachelor of Computer Science (Software Engineering)</p> 
    <p><b>Faculty of Computing and Informatics, UMS.</b></p>
            
    <p>Welcome to my personal site ☻</br></p>
                  
                </div>
                <a href="#" id="tm_about_link" data-linkid="1" class="tm-link">Read More</a>
              </section>

              <!-- Section 1 About Me -->
              <section class="tm-section tm-section-1">
                <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                  <h2 class="tm-text-blue mb-4">EDUCATION</h2>
                  <p class="mb-4">
                    Universiti Malaysia Sabah (2019-2023)
              
                  </p>
                  <p class="mb-4">
                    Kolej Matrikulasi Labuan (2017-2019)
                  </p>
                  <p class="mb-4">
                    SMK. Majakir, Papar. (2012-2016)
                  </p>
                  <p class="mb-4">
                    SK. Kelanahan, Papar. (2006-2011)
                  </p>
                  <a
                    href="#"
                    id="tm_work_link"
                    data-linkid="2"
                    class="tm-link m-0"
                    >Next</a
                  >
                </div>
              </section>

              <!-- Section 2 Work (Gallery) -->
              <section class="tm-section tm-section-2 mx-auto">
                <div class="grid tm-gallery">
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/01.jpeg" alt="Image 1" class="" />
                    <figcaption>
                      <h2>
                        Project
                        <span>1</span>
                      </h2>
                      <p>Student Management System for FKI</p>
                      <a href="img/01.jpeg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/02.jpeg" alt="Pretty Girl" class="" />
                    <figcaption>
                      <h2>
                        Project
                        <span>2</span>
                      </h2>
                      <p>Patient Information System</p>
                      <a href="img/02.jpeg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/03.jpeg" alt="Red Flowers" class="" />
                    <figcaption>
                      <h2>
                        Project
                        <span>3</span>
                      </h2>
                      <p>mylokalfood</p>
                      <a href="img/03.jpeg">View more</a>
                    </figcaption>
                  </figure>
                  <figure class="effect-goliath tm-gallery-item">
                    <img src="img/04.jpeg" alt="Stairs" class="" />
                    <figcaption>
                      <h2>
                        PROJECT
                        <span>4</span>
                      </h2>
                      <p>Productivity App.</p>
                      <a href="img/04.jpeg">View more</a>
                    </figcaption>
                  
                </div>
              </section>

              <!-- Section 3 Contact -->
              <section class="tm-section tm-section-3 tm-section-left">
 
<form action="contact_data.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div><br>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div><br>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="comments" required></textarea>
        </div>
        <div class="form-group">
          <button onclick="myFunction()" input id="Submit" type="submit" value="Submit">Submit</button>

                <script>
                function myFunction() {
                  alert("Thank You For Contacting Us! We will get to you as soon as possible!");
                }
                </script>
        </div>
    </form>
</div>

      <div class="tm-bottom-container">

        

              <!-- Section 4 Contact -->
              <section class="tm-section tm-section-4 tm-section-right">
 
  <main><center>
        <h1>Software Review Form</h1>
        <p><h5>Send us your review of our software. Required fields marked with an
        asterisk *</p></h5>
        <form method="post" action="review_action.php">
        <p><label for="userName">* Name:</label>
        <input type="text" name="name" id="name" required="required"
        placeholder=" your name "></p>
        <p><label for="userEmail">* E-mail:</label>
        <input type="email" name="email" id="email" required="required"
        placeholder=" you@yourdomain.com "></p>

      <p><label for="userReview">* Software Rating:</label>

        <td><input type="radio" name="rating" value="1"/>1</td></tr>
        <td><input type="radio" name="rating" value="2"/>2</td></tr>
        <td><input type="radio" name="rating" value="3"/>3</td></tr>
        <td><input type="radio" name="rating" value="4"/>4</td></tr>
        <td><input type="radio" name="rating" value="2"/>5</td></tr>

        <p><label for="userReview">* Review:</label>
        <textarea name="review" id="review" rows="2" cols="20"
        required="required"></textarea></p>
        <p><label for="recommend">* Recommend to others?: </label><input
        type="checkbox" name="recommend" value="yes"></p>
        


        <!--- <input id="mySubmit" type="submit" value="Submit"> --->


        <button onclick="myFunction()" input id="mySubmit" type="submit" value="Submit"> Submit </button>

        <script>
        function myFunction() {
          alert("Thank you for reviewing!");
        }
        </script>
        </br>
        </form>

        </center>

      <div class="tm-bottom-container">
        <!-- Barcode -->
        <div class="tm-barcode-box">
          <img src="img/bar-code.jpg" alt="Bar code" />
        </div>
        <!-- Footer -->
        <footer>
          || Copyright &copy; 2021 FARADEENA || 
                  
        
        </footer>
      </div>
    </div>



              <!-- Section 5 Contact -->
              <section class="tm-section tm-section-5 tm-section-right">
 
  <main><center>

<div class="col-secLeft">
  <div class="header">
    <h4> Admin Login </h4>
  </div><br>
  <form action="login_action.php" method="post">
  <p>Username: 
  <input type="text" name="myEmail" required placeholder="Your email"></p>
  <p>Password: 
    <input type="password" name="myPwd" required></p>
    <button type="submit">Login</button>
  <br> 
  </form> 
</div>

        </center>

      <div class="tm-bottom-container">
        <!-- Barcode -->
        <div class="tm-barcode-box">
          <img src="img/bar-code.jpg" alt="Bar code" />
        </div>
        <!-- Footer -->
        <footer>
          || Copyright &copy; 2021 FARADEENA || 
                  
        
        </footer>
      </div>
    </div>


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/background.cycle.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
      let slickInitDone = false;
      let previousImageId = 0,
        currentImageId = 0;
      let pageAlign = "right";
      let bgCycle;
      let links;
      let eachNavLink;

      window.onload = function() {
        $("body").addClass("loaded");
      };

      function navLinkClick(e) {
        if ($(e.target).hasClass("external")) {
          return;
        }

        e.preventDefault();

        if ($(e.target).data("align")) {
          pageAlign = $(e.target).data("align");
        }

        // Change bg image
        previousImageId = currentImageId;
        currentImageId = $(e.target).data("linkid");
        bgCycle.cycleToNextImage(previousImageId, currentImageId);

        // Change menu item highlight
        $(`.tm-nav-item:eq(${previousImageId})`).removeClass("active");
        $(`.tm-nav-item:eq(${currentImageId})`).addClass("active");

        // Change page content
        $(`.tm-section-${previousImageId}`).fadeOut(function(e) {
          $(`.tm-section-${currentImageId}`).fadeIn();
          // Gallery
          if (currentImageId === 2) {
            setupSlider();
          }
        });

        adjustFooter();
      }

      $(document).ready(function() {
        // Set first page
        $(".tm-section").fadeOut(0);
        $(".tm-section-0").fadeIn();

        // Set Background images
        // https://www.jqueryscript.net/slideshow/Simple-jQuery-Background-Image-Slideshow-with-Fade-Transitions-Background-Cycle.html
        bgCycle = $("body").backgroundCycle({
          imageUrls: [
            "img/photo-02.jpeg",
            "img/photo-02.jpeg",
            "img/photo-04.jpeg",
            "img/photo-05.jpeg"
          ],
          fadeSpeed: 2000,
          duration: -1,
          backgroundSize: SCALING_MODE_COVER
        });

        eachNavLink = $(".tm-nav-link");
        links = $(".tm-nav-links");

        // "Menu" open/close
        if (links.hasClass("open")) {
          links.fadeIn(0);
        } else {
          links.fadeOut(0);
        }

        $("#tm_about_link").on("click", navLinkClick);
        $("#tm_work_link").on("click", navLinkClick);

        // Each menu item click
        eachNavLink.on("click", navLinkClick);

        $(".tm-navbar-menu").click(function(e) {
          if (links.hasClass("open")) {
            links.fadeOut();
          } else {
            links.fadeIn();
          }

          links.toggleClass("open");
        });

        // window resize
        $(window).resize(function() {
          // If current page is Gallery page, set it up
          if (currentImageId === 2) {
            setupSlider();
          }

          // Adjust footer
          adjustFooter();
        });

        adjustFooter();
      }); // DOM is ready

      function adjustFooter() {
        const windowHeight = $(window).height();
        const topHeight = $(".tm-top-container").height();
        const middleHeight = $(".tm-content").height();
        let contentHeight = topHeight + middleHeight;

        if (pageAlign === "left") {
          contentHeight += $(".tm-bottom-container").height();
        }

        if (contentHeight > windowHeight) {
          $(".tm-bottom-container").addClass("tm-static");
        } else {
          $(".tm-bottom-container").removeClass("tm-static");
        }
      }

      function setupSlider() {
        let slidesToShow = 4;
        let slidesToScroll = 2;
        let windowWidth = $(window).width();

        if (windowWidth < 480) {
          slidesToShow = 1;
          slidesToScroll = 1;
        } else if (windowWidth < 768) {
          slidesToShow = 2;
          slidesToScroll = 1;
        } else if (windowWidth < 992) {
          slidesToShow = 3;
          slidesToScroll = 2;
        }

        if (slickInitDone) {
          $(".tm-gallery").slick("unslick");
        }

        slickInitDone = true;

        $(".tm-gallery").slick({
          dots: true,
          customPaging: function(slider, i) {
            var thumb = $(slider.$slides[i]).data();
            return `<a>${i + 1}</a>`;
          },
          infinite: true,
          prevArrow: false,
          nextArrow: false,
          slidesToShow: slidesToShow,
          slidesToScroll: slidesToScroll
        });

        // Open big image when a gallery image is clicked.
        $(".slick-list").magnificPopup({
          delegate: "a",
          type: "image",
          gallery: {
            enabled: true
          }
        });
      }
    </script>
  </body>
</html>
