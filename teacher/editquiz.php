<?php
include('../connection.php');
session_start();
$_GET['ID'];
$qid = $_GET['ID'];


$_SESSION['Username'];
$admin = $_SESSION['Username'];

$o = "SELECT ID,Question,Choice1,Choice2,Choice3,Choice4,Answer from tblpretest where ID = $qid ";
$result = mysql_query($o);
    while($o = mysql_fetch_array($result)){

                $id = $o['ID'];
                $ques = $o['Question'];
                $ch1 = $o['Choice1'];
                $ch2 = $o['Choice2'];
                $ch3 = $o['Choice3'];
                $ch4 = $o['Choice4'];
                $ans = $o['Answer'];
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
                <a class="navbar-brand" href="index.html"><img src="../images/MathBox.png" height="50" width="50"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Welcome Prof, <?php echo $admin ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
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
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="studentmaintenance.php"><i class="fa fa-table fa-fw"></i> Student List</a>
                        </li>
                        <li>
                            <a href="lessonmaintenance.php"><i class="fa fa-table fa-fw"></i> Lessons List</a>
                        </li>
                        <li>
                            <a href="quizmaintenance.php"><i class="fa fa-table fa-fw"></i> Quiz List</a>
                        </li>
                          <li>
                             <a href="archive.php"><i class="fa fa-wrench fa-fw"></i> Archive<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="studentarchive.php">Student Archive</a>
                                </li>
                                <li>
                                    <a href="lessonarchive.php">Lesson Archive</a>
                                </li>
                                <li>
                                    <a href="quizarchive.php">Quiz Archive</a>
                                </li>
                            </ul>
                            
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
                <div class="col-lg-12">
                    <h1 class="page-header">Editing Quiz</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="editquizexe.php">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <textarea name="question" required class="form-control" placeholder="<?php echo $ques ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Choice 1</label>
                                            <input name="answer1" required class="form-control" placeholder="<?php echo $ch1 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Choice 2</label>
                                            <input name="answer2" required class="form-control" placeholder="<?php echo $ch2 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Choice 3</label>
                                            <input name="answer3" required class="form-control" placeholder="<?php echo $ch3 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Choice 4</label>
                                            <input name="answer4" required class="form-control" placeholder="<?php echo $ch4 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Correct Answer</label>
                                            <input name="final_answer" required class="form-control" placeholder="<?php echo $ans ?>">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-default">Add</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                            </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

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
