<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SAMS - Lecturer Dashboard</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="sccss/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/to-do.css">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<?php
require_once 'core/init.php';
$user_id = $_SESSION['BUser'];
$user = $db->query("SELECT * FROM users WHERE id = '$user_id'");
$name = mysqli_fetch_assoc($user);
$names = explode(" ", $name['name']);
$fname = $names['0'];
if(!is_logged_in()):
header("Location: login.php");
?>
<?php else: ?>
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo"><b>S.A.<span>M.S</span></b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                  <i class="fa fa-tasks"></i>
                  <span class="badge bg-theme">1</span>
                  </a>
                <ul class="dropdown-menu extended tasks-bar">
                  <div class="notify-arrow notify-arrow-green"></div>
                  <li>
                    <p class="green">You have 4 pending tasks</p>
                  </li>
                  <li>
                    <a href="index.html#">
                      <div class="task-info">
                        <div class="desc">COSC 101 Assignment</div>
                        <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="external">
                    <a href="#">See All Tasks</a>
                  </li>
                </ul>
              </li>
              <!-- settings end -->
              <!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge bg-warning">7</span>
                  </a>
                <ul class="dropdown-menu extended notification">
                  <div class="notify-arrow notify-arrow-yellow"></div>
                  <li>
                    <p class="yellow">You have 7 new notifications</p>
                  </li>
                  <li>
                    <a href="index.html#">
                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                      Due Assignment soon
                      <span class="small italic">4 mins.</span>
                      </a>
                  </li>
                  <li>
                    <a href="index.html#">
                      <span class="label label-warning"><i class="fa fa-bell"></i></span>
                      Class by 11pm
                      <span class="small italic">30 mins.</span>
                      </a>
                  </li>
                  <li>
                    <a href="index.html#">
                      <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                      Project due soon
                      <span class="small italic">2 hrs.</span>
                      </a>
                  </li>
                  <li>
                    <a href="index.html#">
                      <span class="label label-success"><i class="fa fa-plus"></i></span>
                      New User Registered.
                      <span class="small italic">3 hrs.</span>
                      </a>
                  </li>
                  <li>
                    <a href="index.html#">See all notifications</a>
                  </li>
                </ul>
              </li>
              <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
          </div>
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              <li><a class="logout" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
        <!--sidebar start-->

        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="profile.html"><img src="<?=$name['image']; ?>" class="img-circle" width="80"></a></p>
              <h5 class="centered"><?= $name['name'];?></h5>
              <li class="mt">
                <a class="active" href="index.html">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
                  </a>
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-desktop"></i>
                  <span>Courses</span>
                  </a>
                <ul class="sub">
                  <li><a href="courses.php">Select Courses</a></li>
                  <li><a href="selected-courses.php">Selected Courses Lists</a></li>
                  <li><a href="ttable.php">Edit/Veiw Timetable</a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-cogs"></i>
                  <span>Resources</span>
                  </a>
                <ul class="sub">
                  <li><a href="grids.html">Assessment</a></li>
                  <li><a href="assignment.php">Assignment</a></li>
                  <li><a href="calendar.html">Quizes</a></li>
                  <li><a href="gallery.html">Notes</a></li>
                  <li><a href="todo_list.html">Teaching References</a></li>
                </ul>
              </li>
            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Assignments</h3>
        <!-- COMPLEX TO DO LIST -->
        <?php
        $courses = $db->query("SELECT * FROM courses");
        while($nam = mysqli_fetch_assoc($courses)):
        $na = explode(",", $nam['student_id']);
        $cid = $nam['id'];
        foreach ($na as $p):
            if($user_id == $p):
              $assign = $db->query("SELECT * FROM assi WHERE course_id = '$cid'");

        ?>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> <?= $nam['name']?></h5>
                </div>
                <br>
              </div>

              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list">
                    <?php
                    while($assignment = mysqli_fetch_assoc($assign)):
                    ?>
                    <li>
                      <div class="task-title">
                        <span class="task-title-sp"><?= $assignment['title']?></span>
                        <span class="badge bg-theme"></span>
                        <div class="pull-right hidden-phone">
                          <a class="btn btn-success btn-xs" href="submission.php?id=<?= $assignment['id'];?>"><i class=" fa fa-check">View</i></a>
                        </div>
                      </div>
                    </li>
                  <?php endwhile;?>
                  </ul>
                </div>

              </div>
            </section>

          </div>
          <!-- /col-md-12-->
        </div>
      <?php endif;?>
    <?php endforeach;?>
  <?php endwhile;?>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <a href="todo_list.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="lib/tasks.js" type="text/javascript"></script>
  <script>
    jQuery(document).ready(function() {
      TaskList.initTaskWidget();
    });

    $(function() {
      $("#sortable").sortable();
      $("#sortable").disableSelection();
    });
  </script>

</body>
<?php endif; ?>
</html>
