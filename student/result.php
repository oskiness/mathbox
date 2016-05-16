<?php
include('connection.php');
session_start();
$_SESSION['Username'];
$stud = $_SESSION['Username'];
$score = 0;
$studentID = "$stud";
$qry = "select * from tblpretest_holder where studentID='$studentID'";
$result = mysql_query($qry);
$result_of_score = mysql_num_rows($result);
  while($qry = mysql_fetch_array($result))
  {
    $question = $qry['Question'];
    $c1 = $qry['Choice1'];
    $c2 = $qry['Choice2'];
    $c3 = $qry['Choice3'];
    $c4 = $qry['Choice4'];
    $answer = $qry['Answer'];
    $student_answer = $qry['Student_Answer'];


    if($answer == $student_answer)
    {
      $score++;

    }
    $percentage = $result_of_score/2;
    if($score >= $percentage)
    {
      $grado = "<font color='green'>Congratulations you Passed</font>";
    }
    else 
    {
      $grado = "<font color='red'>Study More about the Topic</font>";
    }
  }


?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin page</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="./bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="./bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="../images/MathBox.png" height="55" width="55"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       Welcome Student, <?php echo $admin ?> <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                        <li>
                            <a href="courseoutline.php"><i class="fa fa-dashboard fa-fw"></i> Course Outline</a>
                        </li>
                        <li>
                            <a href="viewprogress.php"><i class="fa fa-bar-chart-o fa-fw"></i> View Progress</a>
                        </li>
                        <li>
                            <a href="test.php"><i class="fa fa-table fa-fw"></i> Post-test and Pre-test</a>
                        </li>
                        <li>
                            <a href="videotutorials.php"><i class="fa fa-edit fa-fw"></i> Video Tutorials</a>
                        </li>
                    </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class="row">
          <div id="first-block">
               <div class="line">
                  <div class="margin-bottom">
                     <div class="margin">
                        <center><h1>Pretest</h1></center>
                          <center>
                            <h2><?php echo "$score / $result_of_score"; ?></h2>
                            <?php echo $grado ?>
                          </center>
                              <center><div class="box">
                          <?php

                          $x = 0;

                          $qry = "select * from tblpretest_holder where studentID='$studentID'";
                          $result = mysql_query($qry);
                            while($qry = mysql_fetch_array($result))
                            {
                              $x++;
                              $question = $qry['Question'];
                              $c1 = $qry['Choice1'];
                              $c2 = $qry['Choice2'];
                              $c3 = $qry['Choice3'];
                              $c4 = $qry['Choice4'];
                              $answer = $qry['Answer'];
                              $student_answer = $qry['Student_Answer'];


                              if($answer == $student_answer)
                              {
                              
                                echo 
                                "
                                <div style='border: #2a4270 1px solid; padding: 15px; width:500px;'>
                                $x . $question <br><br>
                                <ul>
                                <li>$c1</li>
                                <li>$c2</li>
                                <li>$c3</li>
                                <li>$c4</li>
                                </ul>
                                <h3>
                                Answer: $student_answer 
                                </h3>
                                <h3>
                                Your answer: $answer
                                </h3>
                                <h3>
                                Result: <font color='green'>Correct</font>
                                </h3>
                                </div>
                                ";
                              }
                              else 
                              {
                                echo 
                                "
                                <div style='border: #2a4270 1px solid; padding: 15px; width:500px;'>
                                $x . $question <br><br>
                                <ul>
                                <li>$c1</li>
                                <li>$c2</li>
                                <li>$c3</li>
                                <li>$c4</li>
                                </ul>
                                <h3>
                                Answer: $student_answer 
                                </h3>
                                <h3>
                                Your answer: $answer
                                </h3>
                                <h3>
                                Result: <font color='red'>Incorrect</font>
                                </h3>
                                </div>
                                ";
                              }
                            }
                          ?>
                          <a class="btn blue" href="./lessons/lesson1/topic1/topic1-1.php" >Proceed to lesson 1 :  Basic Circles </a>
                          </div>
                     </div>
                  </div>
               </div>
            </div>

                                        <!-- /.row -->
          </div>
              <!-- /.panel-body -->
          </div>
      </div>          
  </div>
  <!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="./bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="./bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
