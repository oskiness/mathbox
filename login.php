<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>MATHBOX-Login</title>    
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <link rel="stylesheet" href="css/style_login.css">    
  </head>
  <body>
    <div id="hero">
        <div id="background_animate"></div>
            <h1>MathBox</h1>
            <span class="img_holder">
                <img class="dr-glue-little" src="images/drglue.png" alt="Dr Glue Little">
                <div class="left_arm">
                    <img src="images/left-arm.png" alt="Left Arm">
                </div>
                <div class="right_arm">
                    <img src="images/right-arm.png" alt="Right Arm">
                </div>
            </span>
    </div>
        <form action="loginexe.php" method="post" accept-charset="utf-8">
            <div class="input_holder">
                <span><i class="fa fa-user"></i></span><input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input_holder">
                <span><i class="fa fa-lock"></i></span><input type="password" name="password" id="password_field" placeholder="Password" required>
            </div>
            <input type="submit" name="submit" class="submit_button" value="Log in"><br><br>
            <center><p>Go Back to <a href="index.php">Homepage</a></p></center>
        </form>
<script src='js/jquery.min.js'></script>
<script src='js/transit.js'></script>
<script src='js/background.js'></script>
<script src="js/index.js"></script>
</body>
</html>
