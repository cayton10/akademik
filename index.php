<?
  //Start session
  session_start();
  //Set session variable to count how many classes have been added
  $_SESSION['count'];
  $keys = array_keys($_SESSION['classes']);
  
  //Print classes function require_once to include function
  require_once('scripts/print_Classes.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Akademik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Colorlib stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <!-- SOCIAL LINKS -->
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://github.com/cayton10" target='_blank'><span class="icon-github"></span></a>
              <a href="https://twitter.com/BenCayton" target='_blank'><span class="icon-twitter"></span></a>
              <a href="https://www.linkedin.com/in/bencayton/" target='_blank'><span class="icon-linkedin"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

   <div class="container"> 
      <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('img/nerd.jpg');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>Welcome to Akademia</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="intro-section" style="background-image: url('img/stress3.jpg');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>You Will Know Suffering</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="intro-section" style="background-image: url('img/crying-student.jpg');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>You Will Know Pain</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>How Akademiks Works</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Chart a Path</h2>
                <p>Use this application to map out your remaining course load.</p>
                <p><a href="#add" class="btn btn-primary px-4 rounded-0">Enter Classes</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Track Progress</h2>
                <p>Update completed courses with the grades you've earned through blood, sweat, and tears.</p>
                <p><a href="#view" class="btn btn-primary px-4 rounded-0">Update Completed</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>GPA Calculator</h2>
                <p>Your abysmal GPA will be calculated for you. Thunderdome awaits.</p>
                <p><a href="#gradepoint" class="btn btn-primary px-4 rounded-0">View GPA</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>

<!-- FULL APPLICATION SECTION -->
    <div class="site-section">
      <div class="container">

  <!-- CLASS ADD SECTION -->
        <div class="row mb-5 justify-content-center text-center" id="add" href='#add'>
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span class="mb-3">Add Classes</span>
            </h2>
            <form action="scripts/add_Classes.php" method="POST">

              <p class="form_p text-left mt-3 mb-0">Enter course alpha ID</p>
              <input class="col-12" type="text" name="courseAlpha" id="courseAlpha" placeholder="Ex: CIT, DFIA, CS" autocomplete="off" required="required">

              <p class="form_p text-left mt-3 mb-0">Enter course number</p>
              <input class="col-12" min="0" step="1" type="number" name="courseNum" id="courseNum" placeholder="Ex: 313, 365, 163" autocomplete="off" required="required">

              <p class="form_p text-left mt-3 mb-0">Enter Course Name</p>
              <input class="col-12" type="text" name="courseName" id="courseName" placeholder="Ex: Web Programming II" autocomplete="off" required="required">

              <p class="form_p text-left mt-3 mb-0">Enter credit hours</p>
              <input class="col-12" min="1" max="5" step="1" type="number" name="courseHours" id="courseHours" placeholder="Ex: 3" autocomplete="off" required="required">

              <input type="submit" class="btn btn-primary px-4 rounded-0 my-3" value="Add Class" name="submit">

            </form>
          </div>
        </div>
        <!-- END CLASS ADD SECTION -->

        <!-- VIEW COURSES AND UPDATE COMPLETED COURSES SECTION-->

        <div class="row" id="view">
          <div class="col-12">
            <!-- Start courses listing with option to update grades -->
            <div class="row mb-5 justify-content-center text-center" id="add">
              <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                <span class="mb-5">Course Listing</span>
                </h2>
              </div>
            </div>

            <? 
              //If class input counter is < 1, tell user to add classes
              if ($_SESSION['count'] < 1) {
                echo "<h3 class='text-center'>Please enter class information to populate cirriculum table.</h3>";
              }
              //Call print_Classes function
                echo print_Classes($_SESSION['classes']);
            ?>

          </div>
        </div>  
      </div>
    </div>


    <!-- // 05 - Block -->
  <div class="site-section">
      <div class="container" id='gradepoint'>
        <div class="row mb-5">
          <div class="col text-center">
            <h2 class="section-title-underline">
              <span>Calculated GPA</span>
            </h2>
            <?php
             //Control flow for GPA output
             //If gpa cookie is set...
              if(isset($_COOKIE['gpa']))
              { //Output all of this fancy information
                $indexGPA = $_COOKIE['gpa'];
                echo "<h3 class='gpa'>Your calculated grade point average: <span id='gpa'>" . $indexGPA . "</span></h3><br />";
                echo "<h5>Total hours attempted: " . $_SESSION['totalHours'] ."</h5><br />";
                echo "<h5>Quality points earned: " . $_SESSION['totalGradePoints'] . "</h5><br />";
                echo "<h2 class='section-title-underline my-5'>
                <a href='scripts/killSession.php'><span>Clear Classes</span></a>
              </h2>";
              //Added link with appropriate label to allow users to reset their class list and progress.
              } 
              else 
              {
                echo "<h3>Enter grades for each class added to view GPA.</h3>";
              }
              
            ?>
          </div>
        </div>
      </div>
    </div>
    

    <div class="footer">
      <div class="container">
        <div class="row">
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/akademik.js"></script>

</body>

</html>