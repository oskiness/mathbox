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
      <style>
      .buttons {
        padding-top: 30px;
        text-align: center;
      }  
      .btn {
        cursor: pointer;
        margin: 10px;
        border-radius: 5px;
        text-decoration: none;
        padding: 10px;
        font-size: 15px;
        transition: .3s;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -o-transition: .3s;
        display: inline-block;

      }

      .btn:hover {
        cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
      }
      .blue {
        color: #55acee;
        border: 2px #55acee solid;
      }

      .blue:hover {
        background-color: #55acee;
        color: #fff
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
                      <form>
                        <h2>Let's Start Basic Circle Pre-Test</h2><br><br>
                        Read the instructions carefully.<br>
                        20 Questions 1 point each which in equal to 20 points.<br><br>
                           <div class="buttons">
                              <a href="pretest.php" class="btn blue">Click here to Start!</a>
                              <br><br><br><br><br><br><br><br><br><br><br>
                           </div>
                      </form>
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
        window.location = "./lessons/lesson1/topic1/pretest.php";
      }
      </script>
   </body>
</html>