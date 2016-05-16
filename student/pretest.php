<?php
include('connection.php');
session_start();
$_SESSION['Username'];
$admin = $_SESSION['Username'];
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
                          Instruction: Read the question and Choose the correct answer.<br>
                        <div style='border: #2a4270 0px solid; padding: 15px; width:500px; margin:auto;'>
                        <form class="formcss" method="post" action="exe.php">

                          <?php 
                          include('connection.php');
                          $query = "select * from tblpretest";
                          $count = mysql_query($query);
                          $count = mysql_num_rows($count);
                          $qry = "select * from tblpretest order by rand() limit $count";
                          $result = mysql_query($qry);
                            $x = 0;

                            while($qry = mysql_fetch_array($result))
                            {
                              $x++;
                              $id = $qry['ID'];
                              $question = $qry['Question'];
                              $choice1 = $qry['Choice1'];
                              $choice2 = $qry['Choice2'];
                              $choice3 = $qry['Choice3'];
                              $choice4 = $qry['Choice4'];
                              $answer = $qry['Answer'];
                      echo 

                      "

                      <b>$x</b>. $question <br>

                      <input  type='hidden' name='number$x' value='$id'><br>

                      <input  type='radio' name='answer$x' value='$choice1' required> a.) $choice1 </input> <br>

                      <input  type='radio' name='answer$x' value='$choice2' required> b.) $choice2 </input> <br>

                      <input  type='radio' name='answer$x' value='$choice3' required> c.) $choice3 </input> <br>

                      <input  type='radio' name='answer$x' value='$choice4' required> d.) $choice4 </input> <br><br>

                      ";


                            }
                          ?>
                          <center>
                            <input type="submit" style="border-radius:5px; width:200px; height:50px; background-color:skyblue;" name="submit" value="Submit Answer">
                          </center>
                        </form>

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
