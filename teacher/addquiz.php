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
.question-form{
	border-radius: 8px;
	background-color: #FFFFFF;
	margin:auto;
	width: 300px;
	height: auto;
	padding: 10px;
	background: #ffffff;
	box-shadow: 3px 3px #B3B2B2;	
}

.question-form h1{
	font-family:Verdana, Geneva, sans-serif; 
  text-align: center;
  font-size: 20px;
  color:#3B3C36;
}
hr{
  border: 0 none;
  width: auto;
  margin-left: auto;
  margin-right: auto;
  height: 5px;
  background-color:#87CEFA;
}
.question-form textarea{
  border: none;
  border-radius: 5px;
  border-bottom: solid 3px #c9c9c9;
  transition: border 0.5s;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 12px;
  width: 300px;
  resize:none;
}

.question-form input{
	padding: 10px;
  border: none;
  border-radius: 5px;
  border-bottom: solid 3px #c9c9c9;
  transition: border 0.5s;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 12px;
}

/* start da css for da buttons */
.btn {
  border: 0 none;
  border-radius: 5px;
  padding: 10px 20px;
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
.quiz_list{
  margin-left: 10px; 
  padding: 10px;
  width: auto;
  height: auto;
  border-radius: 8px;
  background-color: #FFFFFF ;
  display: inline-block;  
  box-shadow: 3px 3px #B3B2B2;
}
.quiz_list.flat-table{
  margin: auto;
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 14px;
  overflow: auto;
  width: auto;
  height: 200px;
}
.quiz_list h1{
  font-family:Verdana, Geneva, sans-serif; 
  text-align: center;
  font-size: 23px;
  color:#3B3C36;
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
    </div>
    <br>
  <div class="quiz_list">
    <center><h1>Quiz Database</h1></center><hr>  
      <table class="flat-table">
        <thead>
                    <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Question
                    </th>
                    <th>
                        Choice1
                    </th>
                    <th>
                        Choice2
                    </th>
                    <th>
                        Choice3
                    </th>
                    <th>
                        Choice4
                    </th> 
                    <th>
                        Answer
                    </th>
                    <th>
                        Action
                    </th>
                    </tr>
                </thead>
                <tbody>
         <?php 
           include('connection.php');                     
           $qry = "SELECT ID,Question,Choice1,Choice2,Choice3,Choice4,Answer from tblpretest";
           $result = mysql_query($qry);
            while($qry = mysql_fetch_array($result))
            {
            $id = $qry['ID'];
            $Question = $qry['Question'];
            $Ch1  = $qry['Choice1'];
            $Ch2  = $qry['Choice2'];
            $Ch3  = $qry['Choice3'];
            $Ch4  = $qry['Choice4'];
            $ans  = $qry['Answer'];

          echo "

                        <tr class='success'>
                        <td>
                            $id
                        </td>
                        <td>
                            $Question
                        </td>
                        <td>
                            $Ch1
                        </td>
                        <td>
                            $Ch2
                        </td>
                        <td>
                            $Ch3
                        </td>
                        <td>
                            $Ch4
                        </td>
                        <td>
                            $ans
                        </td>
                         <td>
                            <a href='editquiz.php?ID=$id'>Edit</a>
                        </td>         
                      </tr>";
            }

           ?>
           </tbody>
         </table>
    </div>    
    <br><br>
	</div>
</div>	
</body>
</html>
