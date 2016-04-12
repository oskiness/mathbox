<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MATHBOX</title> 
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>   
</head>
<style type="text/css">
body{
  background-image: url(img/bg1.jpg);
  background-color: #00BBFF;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  -o-background-size:cover;
  background-size: cover;
  overflow: inherit;
}
#main-wrap{
  margin: auto;
    max-width: 1200px;
    height: 627px;    
    border-radius: 8px; 
    background-color: #FFFFED;    
    overflow: hidden;
}
#sidebar{
  margin-right: auto;
  width: 150px;
  height: 700px;  
  background-color: #1560BD;  
  float: left;
}
#content{
  margin-left: auto;
  width: auto;
  height: 700px;
  background-color:#F8F8FF;  
  overflow:scroll;
}
#main-wrap #sidebar #Logo img{
  display: block;
    width: 120px;
    height: 120px;  
    border-radius: 50%;  
    margin: 0 auto 30px;
}
.homepage img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
  border: 5px solid:#1164b4;  
}
.student img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
  border: 5px solid:#1164b4;  
}
.quiz img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
}
.lesson img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
}
.progress img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
}

/* home button*/
.button-home:hover .homepage img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-home .homepage img, .button-home:hover .homepage img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
/* student button*/
.button-student:hover .student img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-student .student img, .button-student:hover .student img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}

/* lesson button*/
.button-lesson:hover .lesson img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-lesson .lesson img, .button-lesson:hover .lesson img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}

/* quiz button*/
.button-quiz:hover .quiz img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-quiz .quiz img, .button-quiz:hover .quiz img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
/* progress button*/
.button-progress:hover .progress img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-progress .progress img, .button-progress:hover .progress img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
.content_header{
  height: 65px;
  width: auto;
  background-color: #87CEFA;
}
#content .content_dashboard{
	margin-left: 30px;
	padding: 10px;
	width: 200px;
	height: 450px;
	border-radius: 8px;
	background-color: #FFFFFF;
	display: inline-block;	
}
.h1{
	margin-left: 30px;
	padding: 10px;	
}
.h1 h1{
	font-family:Georgia, serif;	
	text-align: justify;
	font-size: 20px;
	color: #0073cf;
}
#dashboard p{
	color: #75b73e;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 19px;
}
#dashboard a{
	color: #75b73e;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 15px;
	text-decoration: none;
}
hr{ 
  background-color: #fff;
	border-top: 2px dashed #8c8b8b;
} 

.dashboard{
	margin-right: 30px;
	padding: 10px;	
}
.dashboard h1{
	font-family:Georgia, serif;	
	text-align: justify;
	font-size: 20px;
	color: #0073cf;
}

</style>
<body>
<div id="main-wrap" class="wrapper">
	<div id="sidebar" class="wrapper_side"><br>
    <div id="Logo" class="mathbox_logo"><img src="img/teacher.png"></div>
    <div class="button-home"><a href="Teacherhome.php" class="homepage"><img src="img/teacher_avatar.png"></a></div>    
    <div class="button-student"><a href="pendingstudent.php" class="student"><img  src="img/student_avatar.png"></a></div>     
    <div class="button-quiz"><a href="addquiz.php" class="quiz"><img  src="img/test-quiz.png"></a></div> 
    <div class="button-progress"><a href="studentstatus.php" class="progress"><img src="img/status.png"></a></div>
  </div>

  <div id="content" class="content_wrapper">
    <div class="content_header">          
    </div><br>

    <div id="container">  
  <div id="bar-1" class="bar-main-container azure">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="46"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>
  
  <div id="bar-2" class="bar-main-container emerald">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="94"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>
  
  <div id="bar-3" class="bar-main-container violet">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="47"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>
  
  <div id="bar-4" class="bar-main-container yellow">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="85"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>
  
  <div id="bar-5" class="bar-main-container red">
    <div class="wrap">
      <div class="bar-percentage" data-percentage="33"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
    </div>
  </div>
  
</div>
    <script src="js/index.js"></script>


	</div>
	


</div>
</body>
</html>
