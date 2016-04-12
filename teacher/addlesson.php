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
    border-radius: 25px; 
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
  width: 750px;
  background-color: #87CEFA;
}
.btn {
  border: 0 none;
  border-radius: 8px;
  padding: 15px 25px;
  font-size: 13px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}
.blue {
  background-color: #55acee;
  box-shadow: 0px 5px 0px 0px #3C93D5;
}
.blue:hover {
  background-color: #6FC6FF;
}
.lesson_table{
  float: left;
  margin-left: 20px;
  padding: 10px;
  width: auto;
  height: auto;
  border-radius: 8px;
  background-color: #F8F4FF ;
  display: inline-block;  
  box-shadow: 3px 3px #B3B2B2;
}
table {
  position: relative;  
  display: block;  
  width: auto;
  margin: auto;
  font-family:"Comic Sans MS", cursive, sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 15px;
 }
  th {
    border-top: 5px;
    border-radius: 5px;
    background-color: #4d94ff;
    color: white;
    font-weight: normal;
    padding: 4px 8px;
    text-align: center;
  }
  td {
    border-radius: 5px;
    background-color: rgb(238, 238, 238);
    color: rgb(111, 111, 111);
    padding: 10px 25px;
  } 
  .add_lesson {
  margin-left: 50px;
  margin: auto;
  padding: 10px;
  width: auto;
  height: auto;
  border-radius: 8px;
  background-color: #F8F4FF ;
  box-shadow: 3px 3px #B3B2B2;
  display: inline-block;
  }
</style>
<body>
<div id="main-wrap" class="wrapper">
  <div id="sidebar" class="wrapper_side"><br>
    <div id="Logo" class="mathbox_logo"><img src="../images/MATHBOXFinalLogo.jpg"></div>
    <div class="button-home"><a href="Teacherhome.php" class="homepage"><img src="img/teacher_avatar.png"></a></div>    
    <div class="button-student"><a href="pendingstudent.php" class="student"><img  src="img/student_avatar.png"></a></div>
    <div class="button-lesson"><a href="addlesson.php" class="lesson"><img  src="img/lesson.png"></a></div>     
    <div class="button-quiz"><a href="addquiz.php" class="quiz"><img  src="img/test-quiz.png"></a></div> 
    <div class="button-progress"><a href="studentstatus.php" class="progress"><img src="img/status.png"></a></div>
  </div>

  <div id="content" class="content_wrapper">
    <div class="content_header"></div>

    <br>

    <div class="lesson_table">
      <table>
      <thead>
        <tr>
          <th>
            Lesson ID
          </th>
          <th>
            Lesson Name
          </th>
          <th>
            Description
          </th>         
        </tr>
      </thead>
      </table>
    </div>
    <br><br><br><br>
    <div class="add_lesson">

    </div>
  

  </div>    
</div>
</body>
</html>
