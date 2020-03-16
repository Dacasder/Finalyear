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
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="sccss/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
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
                  <li><a href="timetable.php">Edit/Veiw Timetable</a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-cogs"></i>
                  <span>Resources</span>
                  </a>
                <ul class="sub">
                  <li><a href="assessment.php">Assessment</a></li>
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
        <h3><i class="fa fa-angle-right"></i> Assessment Page</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th></th>
                    <th>Assignment</th>
                    <th>Course</th>
                    <th class="hidden-phone">Score</th>
                    <th class="hidden-phone"></th>
                    <th class="hidden-phone">Grade</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $assign = $db->query("SELECT * FROM ass_scores where user_id = '$user_id'");
                  while($scores = mysqli_fetch_assoc($assign)):
                  $assign_id = $scores['assignment_id'];
                  $score = $scores['score'];
                  $assignment = $db->query("SELECT * FROM assi where id = '$assign_id'");
                  $assignments = mysqli_fetch_assoc($assignment);
                  $title = $assignments['title'];
                  $course_id = $assignments['course_id'];
                  $courses = $db->query("SELECT * FROM courses where id = '$course_id'");
                  $course = mysqli_fetch_assoc($courses);
                  $ctitle = $course['name'];
                  ?>
                  <tr class="gradeX">
                    <td><?= $title?></td>
                    <td><?= $ctitle?></td>
                    <td class="hidden-phone"><?= $score?></td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">A</td>
                  </tr>
                <?php endwhile;?>
                </tbody>
              </table>
            </div>



            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th></th>
                    <th>Quizes</th>
                    <th>Course</th>
                    <th class="hidden-phone">Score</th>
                    <th class="hidden-phone"></th>
                    <th class="hidden-phone">Grade</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $assign = $db->query("SELECT * FROM quiz where user_id = '$user_id'");
                  while($scores = mysqli_fetch_assoc($assign)):
                  $score = $scores['score'];
                  $course_id = $scores['course_id'];
                  $title = $scores['qiuz'];
                  $courses = $db->query("SELECT * FROM courses where id = '$course_id'");
                  $course = mysqli_fetch_assoc($courses);
                  $ctitle = $course['name'];
                  ?>
                  <tr class="gradeX">
                    <td><?= $title?></td>
                    <td><?= $ctitle?></td>
                    <td class="hidden-phone"><?= $score?></td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">A</td>
                  </tr>
                <?php endwhile;?>
                </tbody>
              </table>
            </div>
            <br>
            <br>
            <br>
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>C/A</th>
                    <th class="hidden-phone">Exams</th>
                    <th class="hidden-phone"></th>
                    <th class="hidden-phone">Grade</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $assign = $db->query("SELECT * FROM grades where user_id = '$user_id'");
                  while($scores = mysqli_fetch_assoc($assign)):
                  $cscore = $scores['ca_score'];
                  $course_id = $scores['course_id'];
                  $title = $scores['exam_score'];
                  $grade = $scores['grade'];
                  if($title == 0){
                    $title = "N/A";
                  }
                  if($cscore == 0){
                    $cscore = "N/A";
                  }
                  if($grade == 5){
                    $grade = "A";
                  }elseif($grade == 4){
                    $grade = "B";
                  }elseif($grade == 3){
                    $grade = "C";
                  }elseif($grade == 2){
                    $grade = "D";
                  }elseif($grade == 1){
                    $grade = "E";
                  }elseif($grade == 0){
                    $grade = "F";
                  }

                  $courses = $db->query("SELECT * FROM courses where id = '$course_id'");
                  $course = mysqli_fetch_assoc($courses);
                  $ctitle = $course['name'];
                  ?>
                  <tr class="gradeX">
                    <td><?= $ctitle?></td>
                    <td><?= $cscore?></td>
                    <td class="hidden-phone"><?= $title?></td>
                    <td class="center hidden-phone"></td>
                    <td class="center hidden-phone"><?= $grade?></td>
                  </tr>
                <?php endwhile;?>
                </tbody>
              </table>
            </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </div>
    </div>
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
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>
<?php endif; ?>
</html>
