<?php
include('../connection.php');
session_start();
$_SESSION['Username'];
$stud = $_SESSION['Username'];
$o = "select * from student_login where Username = '$stud'";
$p = mysql_query($o);
  while($o = mysql_fetch_array($p))
  {
    $user = $o['Username'];
    $pass = $o['Password'];
    $fname = $o['Firstname'];
    $mname = $o['Middlename'];
    $lname = $o['Lastname'];
    $Email = $o['EmailAddress'];
    $bdate = $o['Birthdate'];
    $cnumber = $o['ContactNumber'];
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
      <link href='http://fonts.googleapis.com/css?family=Opes:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <style>

          .gridcontainer {
            width: 720px;
            margin: 30px auto;
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
            .user-row {
              margin-bottom: 14px;
            }

            .user-row:last-child {
                margin-bottom: 0;
            }

            .dropdown-user {
                margin: 13px 0;
                padding: 5px;
                height: 100%;
            }

            .dropdown-user:hover {
                cursor: pointer;
            }

            .table-user-information > tbody > tr {
                border-top: 1px solid rgb(221, 221, 221);
            }

            .table-user-information > tbody > tr:first-child {
                border-top: 0;
            }


            .table-user-information > tbody > tr > td {
                border-top: 0;
            }
            .toppad
            {margin-top:20px;
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
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                  <center><h1>Edit User Profile</h1></center>     
                  <div class="panel panel-info">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-3 col-lg-3 " align="center"></div>
                                <div class=" col-md-9 col-lg-9 "> 
                             <form action="editexe.php" method="POST">
                                   <table class="table table-user-information">
                                  <h3 class="panel-title">
                                
                                    <input name="firstname" value="<?php echo $fname?> ">
                                    <input name="middlename" value="<?php echo $mname?> ">
                                    <input name="lastname" value="<?php echo $lname?> "></h3>
                                  <tbody>
                                     <tr>
                                      <td>Username</td>
                                      <td><input name="username" value="<?php echo $user ?>"</td>
                                    </tr>
                                    <tr>
                                      <td>Password</td>
                                      <td><input name="password" type="password"  value="<?php echo $pass ?>">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Date of Birth</td>
                                      <td><input type="date" name="birthdate" value="<?php echo $bdate ?>"</td>
                                    </tr>
                                    <tr>
                                      <td>Email</td>
                                      <td><input name="emailaddress" value="<?php echo $Email ?>"></input></a></td>
                                    </tr>
                                      <td>Contact Number</td>
                                      <td><input name="contactnumber"  value="<?php echo $cnumber ?>"></input>(Mobile)
                                      </td>
                                      <tr>
                                        <td></td>
                                        <td>
                                          <button name="submit" type="submit">Update info</button>
                                        </td>
                                      </tr>
                                    </tr>
                             </form>
                                  </tbody>
                                </table>
                              </div>
                          
                        </div>
                    </div>               
                  </div>
                </div>
              </div>
            </div>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            
         </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();

            //Click dropdown
            panelsButton.click(function() {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    //Completed slidetoggle
                    if(idFor.is(':visible'))
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    }
                    else
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });


            $('[data-toggle="tooltip"]').tooltip();

            $('button').click(function(e) {
                e.preventDefault();
                alert("This is a demo.\n :-)");
            });
        });

      </script>
   </body>
</html>