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

    <title>Admin</title>
    <title>MathBox | Admin Page</title>

    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="./dist/css/timeline.css" rel="stylesheet">
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="./bower_components/morrisjs/morris.css" rel="stylesheet">
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
                        Welcome Admin, <?php echo $admin ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="teachermaintenance.php"><i class="fa fa-bar-chart-o fa-fw"></i> Teacher Maintenance</a>
                        </li>
                        <li>
                            <a href="studentmaintenance.php"><i class="fa fa-table fa-fw"></i> Student Maintenance</a>
                        </li>
                        <li>
                            <a href="sectionmaintenance.php"><i class="fa fa-edit fa-fw"></i> Section Maintenance</a>
                        </li>
                        <li>
                            <a href="lessonmaintenance.php"><i class="fa fa-edit fa-fw"></i> Lesson Maintenance</a>
                        </li>
                        <li>
                            <a href="archive.php"><i class="fa fa-wrench fa-fw"></i> Archive</a>
                        </li>
                        <li>
                            <a href="contentapproval.php"><i class="fa fa-sitemap fa-fw"></i> Content Approval</a>
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
                    <h1 class="page-header">Adding Student </h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="addstudentexe.php">
                                        <div class="form-group">
                                            <label>Student number</label>
                                            <input name="firstname" class="form-control" value="1504-" placeholder="Enter number">
                                        </div>
                                        <div class="form-group">
                                            <label>Firstname</label>
                                            <input name="firstname" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Lastname</label>
                                            <input name="lastname" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Middlename</label>
                                            <input name="middlename" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Assign Section</label>
                                            <select class="form-control" name="section">
                                                <?php
                                                    include('connection.php');
                                                    $qry = "SELECT Section from tblsection";
                                                    $rsl = mysql_query($qry);
                                                    while($qry = mysql_fetch_array($rsl)){
                                                        $Section = $qry['Section'];
                                                        ?>                                               
                                                <option>
                                                    <?php echo $Section; ?>
                                                </option>
                                                        <?php
                                                    }
                                                ?>

                                            </select>
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
    </div> <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./bower_components/raphael/raphael-min.js"></script>
    <script src="./bower_components/morrisjs/morris.min.js"></script>
    <script src="./js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
