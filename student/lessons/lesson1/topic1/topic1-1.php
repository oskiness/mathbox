<?php
include('../../../connection.php');
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
    <link href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <a href="index.php"><img src="../../../../images/MathBox.png" height="55" width="55"></a>
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
                            <a href="../../../courseoutline.php"><i class="fa fa-dashboard fa-fw"></i> Course Outline</a>
                        </li>
                        <li>
                            <a href="../../../viewprogress.php"><i class="fa fa-bar-chart-o fa-fw"></i> View Progress</a>
                        </li>
                        <li>
                            <a href="../../../test.php"><i class="fa fa-table fa-fw"></i> Post-test and Pre-test</a>
                        </li>
                        <li>
                            <a href="../../../videotutorials.php"><i class="fa fa-edit fa-fw"></i> Video Tutorials</a>
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
                                    <h1>The Basic Circles</h1>
                                       <article class="s-12">
                                           <embed src="thecircles.swf" height="435px" width="550px">
                                       </article>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>

                        <div class="lessons">
                           <img src="../../img/circle.gif" alt="circle">
                           <p>A <strong>CIRCLE</strong> is an important shape in the field of geometry. Let's look at the definition of a circle and its parts. We will also examine the relationship between the circle and the plane.</p><br>
                           <p>A circle is a shape with all points the same distance from its center. A circle is named by its center. Thus, the circle to the right is called circle A since its center is at point A. Some real world examples of a circle are a wheel, a dinner plate and (the surface of) a coin.</p><br>
                           <p>The distance across a circle through the center is called the <strong>DIAMETER</strong>. A real-world example of diameter is a 9-inch plate.</p><br>
                           <p>The <strong>RADIUS</strong> of a circle is the distance from the center of a circle to any point on the circle. If you place two radii end-to-end in a circle, you would have the same length as one diameter. Thus, the diameter of a circle is twice as long as the radius. </p><br>
                           <p>A <strong>CHORD</strong> is a line segment that joins two points on a curve. In geometry, a chord is often used to describe a line segment joining two endpoints that lie on a circle. The circle to the right contains chord AB. If this circle was a pizza pie, you could cut off a piece of pizza along chord AB. By cutting along chord AB, you are cutting off a segment of pizza that includes this chord.</p><br>
                        </div>
                        
                        <div class="draw">
                           <center><h1>You Can Create Your Own Circle</h1></center>
                           <img src="../../img/circle-draw.jpg" alt="circle">
                           <p>Grab a two pencil or ballpen, put the first pencil on the middle, and using the second pencil draw around of it. Keep the string stretched and draw the circle!</p>
                        </div>

                        <!-- FOOTER -->
                        <div id="footer-content" class="sticky-footer">
                           <center>
                           <p> &copy; 2016 All right reserved | Maintained by the Computer Science student of STI College-Caloocan </p>
                           </center>
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
