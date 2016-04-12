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
  overflow: scroll; 
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
.student_table{
  width: auto;
  margin: auto;
  height: auto;
  border-radius: 8px;
  background-color: #F8F4FF ;  
  box-shadow: 3px 3px #B3B2B2;
}
.student_table h1{
  font-family:Verdana, Geneva, sans-serif;  
  text-align: center;
  font-size: 20px;
  color:#3B3C36;
}
.student_table.flat-table {
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 14px;
  overflow: auto;
  width: auto;
  
}  
  th {
    border-radius: 5px;
    background-color: #4d94ff;
    color: white;
    font-weight: normal;
    padding: 9px 14px;
    text-align: center;
  }
  td {
    border-radius: 5px;
    background-color: rgb(238, 238, 238);
    color: rgb(111, 111, 111);
    padding: 9px 14px;
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
.red {
  background-color: #e74c3c;
  box-shadow: 0px 5px 0px 0px #CE3323;
}
.red:hover {
  background-color: #FF6656;
}
hr{
  border: 0 none;
  width: auto;
  margin-left: auto;
  margin-right: auto;
  height: 5px;
  background-color:#87CEFA;
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
		<div class="content_header"></div>	
    <br>
		<div class="student_table">
    <center><h1>Student Maintenance</h1></center><hr><br> 
    <form method="post" action="studconfirm.php"> 
      <table class="flat-table">
        <tbody>
          <tr>
            <th>Student ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Section</th>  
            <th>Action</th>              
          </tr>                  
        </tbody>
        <tbody>
         <?php 
           include('connection.php');
           $qry = "SELECT`student_login`.`StudentID`,`Username`,`Password`,`Firstname`,`Middlename`,`Lastname`,`Section`FROM `student_login`WHERE `student_login`.`Section` = (
	         SELECT `teacher_login`.`Section` FROM `teacher_login` WHERE `teacher_login`.`Username` = 'Prof')";
           $result = mysql_query($qry);
            while($qry = mysql_fetch_array($result))
            {
            $id = $qry['StudentID'];
            $user = $qry['Username'];
            $pass = $qry['Password'];
            $fname = $qry['Firstname'];
            $mname = $qry['Middlename'];
            $sname = $qry['Lastname'];
            $section = $qry['Section'];
            ?>
        
                        <tr class='success'>
           				      <td>
                            <?php echo $id; ?>
                        </td>
                         <td>
                            <?php echo $user; ?>
                        </td>
                        <td>
                            <?php echo $pass; ?>
                        </td>
                        <td>
                            <?php echo $fname; ?>           
                        </td>
                        <td>
                            <?php echo $mname; ?>           
                        </td>
                        <td>
                            <?php echo $sname; ?>           
                        </td>
                       
                        <td>
                            <?php echo $section; ?>          
                        </td>
                        <td>
                            <a href='deletestudent.php?StudentID=<?php echo $id; ?>'>Delete</a>

                        </td>           
                      </tr>
                      <?php
            }
           ?>
           </tbody>
      </table>
      </form>
    </div>    

    </div>    
</div>
</body>
</html>
