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

          .gridcontainer {
            width: 720px;
            margin: 90px;
            border-radius: 15px;
            background:white;
            height: 250px; 
          }

          .grid_3 {
            display: inline;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            width: 220px;

          }

          .grid_9 {
            display: inline;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            width: 700px;
          }

          .fmcircle_out {
            width: 200px;
            height: 200px;
            background: rgba(221,221,221,0.3) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAO0lEQVQYV2NkIAIwElKze/fu/3gVgRS4uroyEjQJZBNWRTATYE7BUISuAKdJ6J6Bm4TNBBTr8CkAKQQA02QXOj4w/E8AAAAASUVORK5CYII=);
            text-align: center;
            display: block;
            margin-left: 10px;
            opacity: 0.5; 
            
            border-radius: 100px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            -o-border-radius: 100px;
            
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
          }

            .fmcircle_out:hover {
              opacity: 1; 
              
              -webkit-transition: all 0.2s linear;
              -moz-transition: all 0.2s linear;
              -o-transition: all 0.2s linear;
              -ms-transition: all 0.2s linear;
              transition: all 0.2s linear;
            }
            
            .fmcircle_out:hover .fmcircle_in img {
              margin: 30px 25px 25px 25px;
              width: 120px;
              height: 120px;
              
              -webkit-transition: all 0.2s linear;
              -moz-transition: all 0.2s linear;
              -o-transition: all 0.2s linear;
              -ms-transition: all 0.2s linear;
              transition: all 0.2s linear;
            }
            


          .fmcircle_in {
            width: 170px;
            height: 170px;
            margin: 15px;
            display: inline-block;
            overflow: hidden;
            
            border-radius: 85px;
            -moz-border-radius: 85px;
            -webkit-border-radius: 85px;
            -o-border-radius: 85px;
          }

          .fmcircle_in img {
            border: none;
            margin: 53px;
            width: 64px;
            height: 64px;
              
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
          }

          .fmcircle_in span {
            margin: 0;
            padding: 0;
            border: 0;
            vertical-align: baseline;
            width: 160px;
            background: #fff;
            color: #666666;
            padding: 5px;
            margin: 60px -20px 0 -80px;
            height: auto;
            text-align: center;
            font-weight: bold;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            float: left;
            position: absolute;
            opacity: 0;
            
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            -o-border-radius: 2px;
              
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
          }

            .fmcircle_out:hover .fmcircle_in span {
              opacity: 1;
              -webkit-transition: all 0.2s linear;
              -moz-transition: all 0.2s linear;
              -o-transition: all 0.2s linear;
              -ms-transition: all 0.2s linear;
              transition: all 0.2s linear;
            }
            .fmcircle_red {
              background:#b72f2b;
            }
            .fmcircle_blue {
              background:#5796a1;
            }
            .fmcircle_green {
              background:#64ac62;
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
                        
                        <li><a><br>Welcome Student,<?php echo $stud ?></a></li>
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
                           <div class="gridcontainer">
                              <div class="grid_3">
                                Course Outline
                                <div class="fmcircle_out">
                                  <a href="courseoutline.php">  
                                    <div class="fmcircle_border">
                                      <div class="fmcircle_in fmcircle_green">
                                        <img src="img/courseoutline.png" alt="" />
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="grid_3">View Progress
                                <div class="fmcircle_out">
                                  <a href="viewprogress.php">
                                    <div class="fmcircle_border">
                                      <div class="fmcircle_in fmcircle_blue">
                                        <img src="img/viewprogress.png" alt="" />
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="grid_3">Profile
                                <div class="fmcircle_out">
                                  <a href="profile.php">
                                    <div class="fmcircle_border">
                                      <div class="fmcircle_in fmcircle_red">
                                        <img src="img/profile.png" alt="" />
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
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
   </body>
</html>