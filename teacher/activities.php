<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MATHBOX</title>    
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
}
#main-wrap{
  margin: auto;
    max-width: 900px;
    height: 700px;    
    border-radius: 8px; 
    background-color: #F8F8FF;   
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
  width: 750px;
  height: 700px;  
  background-color:#F2F3F4; 
  float: right;
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
.back img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
}
.search img{
  margin: 0 auto 30px;
  width: 80px;
  height:80px;
  display: block;
  border-radius: 10px;
}
.logout img{
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

/* search button*/
.button-search:hover .search img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-search .search img, .button-search:hover .search img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}

/* back button*/
.button-back:hover .back img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-back .back img, .button-back:hover .back img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
}
/* logout button*/
.button-logout:hover .logout img{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;
}
.button-logout .logout img, .button-logout:hover .logout img {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
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
    <div id="Logo" class="mathbox_logo"><img src="../images/MATHBOXFinalLogo.jpg"></div>
    <div class="button-home"><a href="Teacherhome.php" class="homepage"><img src="img/Home.jpg"></a></div>    
    <div class="button-search"><a href="#" class="search"><img  src="img/Search.png"></a></div>     
    <div class="button-back"><a href="#" class="back" onclick="history.back()"><img src="img/Back.jpg"></a></div>   
    <div class="button-logout"><a href="logout.php" class="logout"><img src="img/Logout.jpg"></a></div>
  </div>

	<div id="content" class="content_wrapper">
		



	</div>
	


</div>
</body>
</html>
