<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>MathBox-Registration</title>    
        <link rel="stylesheet" href="css/style_register.css">    
  </head>

  <body>    
	<div id="header">
        <div id="clouds">
            <div class="cloud-1" data-speed="35000"></div>
            <div class="cloud-2" data-speed="45000" data-delay="15000"></div>
            <div class="cloud-3" data-speed="40000"></div>
            <div class="cloud-4" data-speed="38000" data-delay="20000"></div>
        </div>
	</div>
    <div id="content">
        <div class="container">            
            <form id="login" method="post" action="registerexe.php" onsubmit="return checkForm(this);">
                <div id="login_header"><i class="icon-home"></i>Sign Up Here</div>


                
                <div id="login_content">
                <p>Fill out the required fields (*)</p><br>           
                    <span>
                        <input class="tip" name="Firstname" type="text" required maxlength="18" onclick="onClick(this);" onblur="onBlur(this);">
                        <label for="firstname">Firstname *</label>
                        <i class="icon-user"></i>
                    </span>
                    <span>
                        <input class="tip" name="Middlename" type="text"  maxlength="18" onclick="onClick(this);" onblur="onBlur(this);">
                        <label for="Middlename">Middlename</label>
                        <i class="icon-user"></i>
                    </span>
                    <span>
                        <input class="tip" name="Lastname" type="text" required maxlength="18" onclick="onClick(this);" onblur="onBlur(this);">
                        <label for="lastname">Lastname *</label>
                        <i class="icon-lock"></i>
                    </span>
                    <span>
                        <input class="tip" name="EmailAddress" type="email" required maxlength="30" onclick="onClick(this);" onblur="onBlur(this);">
                        <label for="email">EmailAddress *</label>
                        <i class="icon-lock"></i>
                    </span>
                </div><!-- / #login_content -->

                <div id="login_footer">
                    <div class="ing"></div>
                    <button id="login_btn" name="submit" type="submit">Submit</button>
                    <center><p>Login <a href="login.php">Here</a></p></center>
                    <center><p>Go Back to <a href="index.php">Homepage</a></p></center>
                </div>
                </form>
        </div>
    </div>
	
    <div id="footer">        
        <div class="container"></div>
    </div><!-- / #footer -->    
        <script src="js/register.js"></script>   
  </body>
</html>
