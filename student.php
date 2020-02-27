<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Page</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/style.css">

  </head>
  <?php
  require_once 'core/init.php';
  $user_id = $_SESSION['BUser'];
  $user = $db->query("SELECT * FROM users WHERE id = '$user_id'");
  $name = mysqli_fetch_assoc($user);
  $names = explode(" ", $name['name']);
  $fname = $names['0'];
  ?>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>
<div class="site-wrap">
  <div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<div class="site-navbar-wrap">
  <div class="site-navbar-top">
    <div class="container py-3">
      <div class="row align-items-center">
    <div class="col-6">
          <div class="d-flex ml-auto">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-navbar site-navbar-target js-sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-2">
          <h4 class="d-none d-md-inline-block" class="d-flex align-items-center">Student Page</h4>
        </div>
        <div class="col-10">
          <nav class="site-navigation text-right" role="navigation">
            <div class="container">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                <li>
                  <a href="student.php" class="nav-link">Home</a>
                </li>
                <li>
                  <a href="scheduals.php" class="nav-link">Scheduals</a>
                </li>
                   <li><a href="http://localhost/FinalYearProject/index.php" class="nav-link">Log out</a></li>
                <li class="has-children" >
                  <a href="#assignment-section" class="nav-link">Assignment</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="newass.php" class="nav-link">New Assignment</a>
                    <li><a href="viewass.php" class="nav-link">Review Assignment</a>
                  </ul>
                </li>

                <li><a href="logout.php" class="nav-link">Log out</a></li>
              

                <li class="has-children">
                  <a href="#contact-section" class="nav-link">Contacts</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="studentsup.php" class="nav-link">Student Support</a></li>
                    <li><a href="schoolad.php" class="nav-link">School Advisor</a></li>
                  </ul>
                </li>
                <li>Hello, <?= $fname;?></li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-blocks-cover overlay" style="background-image: url(img/xxx.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
  <div class="container">
    <div class="row align-items-center text-center justify-content-center">

<div class="col-md-8">

<div class="contain1">
    	<div id="box1">
    		<img src="" height="150" width="150">
    		  <p><em><strong>GPA</strong></em></p>
    	     </div>

      	<div id="box2">
      		<img src="" height="150" width="150">
      		  <p><em><strong>Register Courses</strong></em></p>
      	      </div>


    	<div id="box3">
      		<img src="" height="150" width="150">
      		  <p><em><strong>Time Table</strong></em></p>
      	     </div>

    	  <div id="box4">
    		    <img src="" height="150" width="150">
    		      <p><em><strong>Set Goals</strong></em></p>
    	           </div><div class="clear"></div>
</div>

</div>
      </div>
    </div>
  </div>
</div>
<div class="site-section  border-bottom">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <div class="media custom-media">
          <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>
          <div class="media-body">
            <h5 class="mt-0">XXXXXXX</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <div class="media custom-media">
          <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>
          <div class="media-body">
            <h5 class="mt-0">XXXXXXXX</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <div class="media custom-media">
          <div class="mr-3 icon"><span class="flaticon-turned-off display-4"></span></div>
          <div class="media-body">
            <h5 class="mt-0">XXXXXXXXX</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin..
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


</div>

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
