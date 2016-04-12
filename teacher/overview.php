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
    background-color: #FFFFED;    
    overflow: hidden;
}
#sidebar{
	margin-right: auto;
	width: 150px;
	height: 700px;
	border-radius: 5px;
	background-color: #FFF44F;	
	float: left;
}
#content{
	margin-left: auto;
	width: 750px;
	height: 700px;
	border-radius: 5px;
	background-color:#FDFDA4; 
	float: right;
	box-shadow: 3px 3px #B3B2B2;
}
#main-wrap #sidebar #Logo img{
	display: block;
    width: 100px;
    height: 100px;  
    border-radius: 50%; 
    border-style: solid #FFBA00;
    margin: 0 auto 30px;
}
.homepage img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
	border: 5px solid:#1164b4;	
}
.return img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
}
.print img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
}
.archive img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
}
.logout img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
}
.settings img{
	margin: 0 auto 30px;
	width: 60px;
	height:60px;
	display: block;
	border-radius: 10px;
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
		<div id="Logo" class="mathbox_logo">
			<img src="img/AdminAvatar.jpg">
		</div>
		<a href="Teacherhome.php" class="homepage"><img src="img/Home.jpg"></a>
		<a href="#" class="print"><img src="img/Print.jpg"></a>
		<a href="#" class="archive"><img src="img/Archive.png"></a>			
		<a href="#" class="return" onclick="history.back()"><img src="img/Back.jpg"></a>		
		<a href="#" class="settings"><img src="img/Settings.jpg"></a>
		<a href="../index.php" class="logout"><img src="img/Logout.jpg"></a>

	</div>

	<div id="content" class="content_wrapper">
		



	</div>
	


</div>
</body>
</html>
