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
      <style>      
      .box{
        margin:auto;
        padding: 15px;
        }
      </style>
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
         </section>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            
         </div>
      </div>
   </body>
</html>