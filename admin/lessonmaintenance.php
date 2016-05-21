<?php
include('../connection.php');
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
                        Welcome Admin, <?php echo $admin ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
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
                            <a href="archive.php"><i class="fa fa-wrench fa-fw"></i> Archive<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="teacherarchive.php">Teacher Archive</a>
                                </li>
                                <li>
                                    <a href="studentarchive.php">Student Archive</a>
                                </li>
                                 <li>
                                    <a href="lessonarchive.php">Lesson Archive</a>
                                </li>
                                <li>
                                    <a href="sectionarchive.php">Section Archive</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="contentapproval.php"><i class="fa fa-sitemap fa-fw"></i> Content Approval</a>
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
                    <h1 class="page-header"><center>Lesson Archive</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                        <a style="float:right; padding-right:10px;" href="addlesson.php"><img src="img/user_add.png" height="30px" style="float:center; padding-left:20px;"><br>Add lesson</a><br><br>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Lesson Name
                                                </th>
                                                 <th>
                                                    Description
                                                </th>  
                                                <th>
                                                    Video
                                                </th> 
                                                <th>
                                                    Confirm
                                                </th>
                                                <th>
                                                    Action
                                                </th> 

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                             include('../connection.php');
                                             
                                             $qry = "SELECT ID,LessonName,Description,Video,Confirm  from tbllesson where Active='Yes' and Confirm = 'Accepted'";
                                             $result = mysql_query($qry);
                                                while($qry = mysql_fetch_array($result))
                                                {
                                                    $id = $qry['ID'];
                                                    $lesson = $qry['LessonName'];
                                                    $desc = $qry['Description'];
                                                    $vid = $qry['Video'];
                                                    $conf = $qry['Confirm'];
                                            echo "
                                                <tr class='success'>
                                                <td>
                                                    $id
                                                </td>
                                                <td>
                                                    $lesson
                                                </td>
                                                <td>
                                                    $desc
                                                </td>
                                                <td>
                                                    $vid
                                                </td>
                                                <td>
                                                    $conf
                                                </td>                                              
                                                <td>
                                                    
                                                    <a href='editlesson.php?ID=$id'>Edit</a>
                                                    <a href='deletelesson.php?ID=$id'>Delete</a>

                                                </td>                       
                                              </tr>";
                                              }

                                             ?>
                                             </tbody>
                                         </table>
                                                </div>
                                                <!-- /.table-responsive -->
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
            <!-- /.row -->
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
