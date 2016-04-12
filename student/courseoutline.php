<?php
include('connection.php');
session_start();
$_SESSION['Username'];
$stud = $_SESSION['Username'];
?>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>MathBox | Student</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
   </head>
   <body class="size-1140">
      <div id="all-content" class="with-sticky-footer">
         <!-- TOP NAV WITH LOGO -->
         <header>
            <nav>
               <div class="line">
                  <div class="s-12 l-2">
                    <img class="s-5 l-12 center"src="img/logo.png">
                  </div>
                  <div class="top-nav s-12 l-10 right">
                     <p class="nav-text">Custom menu text</p>
                     <ul class="right">
                        <li><a href="studenthome.php"><br>Home</a></li>
                        <li><a ><br>Welcome Student, 
                        <?php echo $stud ?></a></li>
                        <li><a href="logout.php"><br>Log-out</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section>
            <!-- FIRST BLOCK -->
            <div id="first-block">
               <div class="line">
                  <div class="margin-bottom">
                     <div class="margin">
                        <article class="s-12">
                           <table>
                             <thead>
                             <h1>Course Outline</h1>
                                <tr>
                                  <th>Lessons</th>
                                  <th>Topic of Lesson </th>
                                  <th>Pretest</th>
                                  <th>Downloadable PDF</th>
                                </tr>
                             </thead>
                                  <tbody>
                                    <tr>
                                        <td>Lesson 1: The Circles</td>
                                        <td>The Basic of Circles</td>
                                        <td><a href="javascript:myfunction();">Take a Pretest</a></td>
                                        <td><a href="#">Basic Circles</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Sector and Segments of a Circles</td>
                                        <td><a href="javascript:myfunction1();">Take a Pretest</a></td>
                                        <td><a href="#"> Sector and Segments</a></td>
                                    </tr>

                                    <tr>
                                      <td>Lesson 2: Angles and their intercepted arts</td>
                                      <td>Central Angles</td>
                                      <td><a href="javascript:myfunction2();">Take a Pretest</a></td>
                                      <td><a href="#"> Central Angles</a></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>Inscribe Angles</td>
                                      <td><a href="javascript:myfunction3();">Take a Pretest</a></td>
                                      <td><a href="#"> Inscribe Angle</a></td>
                                    </tr>

                                    <tr>
                                      <td>Lesson 3: Tangent line and Circles</td>
                                      <td>Tangent Lines</td>
                                      <td><a href="javascript:myfunction4();">Take a Pretest</td>
                                      <td><a href="#">Tangent lines</a></td>
                                      <tr>
                                        <td></td>
                                        <td>Common tangents</td>
                                        <td><a href="javascript:myfunction5();">Take a Pretest</td>
                                        <td><a href="#"> Common tangents</td>
                                      </tr>
                                    </tr>

                                    <tr>
                                      <td>Lesson 4: Angles form by Tangent and Secants</td>
                                      <td>Angles form</td>
                                      <td><a href="javascript:myfunction6();">Take a Pretest</td>
                                      <td><a href="#">Angles Form</a></td>
                                    </tr>

                                    <tr>
                                      <td>Lesson 5: The Power Theorems</td>
                                      <td>Power Theorems</td>
                                      <td><a href="javascript:myfunction7();">Take a Pretest</td>
                                      <td><a href="#"> Power Theorems</td>
                                    </tr>
                                  </tbody>
                           </table>
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            
         </div>
      </div>
      <script>
      function myfunction(){
        alert("You must take the pretest before go to lessons");
        window.location = "pretesthome.php";
      }
      </script>
   </body>
</html>