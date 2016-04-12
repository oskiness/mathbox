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
         </section>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            
         </div>
      </div>
      <script>
      function myfunction(){
        alert("You must take pretest first");
        window.location = "pretesthome.php";
      }
      </script>
   </body>
</html>