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
	background-color: #FFF44F;	
	float: left;
}
#content{
	margin-left: auto;
	width: 750px;
	height: 700px;	
	background-color:#F3FDE6; 
	float: right;
	box-shadow: 3px 3px #B3B2B2;
}
#main-wrap{
  margin: auto;
    max-width: 900px;
    height: auto;    
    border-radius: 8px; 
    background-color: #FFFFED;     
}

#sidebar{
  margin-right: auto;
  width: 150px;
  min-height: 750px;
  background-color: #fef667;  
  float: left;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  -o-background-size:cover;
  background-size: cover;
}
#content{ 
  width: 750px;
  height: 750px;  
  background-color:#FDFBEF; 
  float: right;
  box-shadow: 3px 3px #B3B2B2;
  overflow: auto; 
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

#content-header{
	color: #FFFFFF;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 20px;
	text-decoration: none;
	margin-left: auto;
	padding: 10px;
	width: 750px;
	height: 50px;	
	background-color: #4CBB17;
	display: inline-block; 
}

#class{
	margin: auto;
	padding: 10px;
	padding-left: 10px;
	padding-right: 10px;
	width: auto;
	height: auto;
	border-radius: 8px;
	background-color: #FFFFFF;
	display: inline-block;
}

#class h1{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	text-align: justify;
	color: #0892D0;
}

#class button{
  padding:10px 15px; 
  background:#66CD00;
  color: #FFFFFF; 
  border:0 none;
  cursor:pointer;
  -webkit-border-radius: 6px;
  border-radius: 6px; 
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  font-size: 18px;
  margin: auto;
}

#class a{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
  text-decoration: none;
}

#class input{
	padding:15px 18px; 
  background:#FFFFFF; 
  border:0 none;
  cursor:pointer;
  -webkit-border-radius: 10px;
  border-radius: 10px; 
  font-family: Arial, Helvetica, sans-serif;
  font-size: 18px;
  margin: auto;
}

#class p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  text-decoration: none;
  color: #A19E9E;
}

table {
  display: block;
  font-family:"Comic Sans MS", cursive, sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 15px;
  overflow: auto;
  width: 680px;
  margin: auto;
 }

  th {
  	border-top: 5px;
  	border-radius: 5px;
    background-color: #0790E0;
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
		<div id="content-header" class="content_header">
			<img src="img/Class2.png" height="55" width="55">Create Your New Class<br>
		</div><br><br>	
		<div id="class" class="add_class">
			<h1>Classes</h1>
			<table>
				<thead>
                    <tr>
					<th>
                            ID
                        </th>
                        <th>
                            Section
                        </th>
                        <th>
                          	Number of Students
                        </th>
						 <th>
                            Action
                        </th>	
                    </tr>
                </thead>
                <tbody>
				 <?php 
					 include('connection.php');
                     
					 $qry = "SELECT ID,Section,NumberOfStudent from tblsection";
					 $result = mysql_query($qry);
						while($qry = mysql_fetch_array($result))
						{
						$id = $qry['ID'];
						$Section = $qry['Section'];
						$NumberOfStudent = $qry['NumberOfStudent'];
					echo "
                        <tr class='success'>
						<td>
                            $id
                        </td>
                        <td>
                            $Section
                        </td>
                        <td>
                            $NumberOfStudent
                        </td>
                        <td>
                        	<a href='deleteclass.php?ID=$id'>Delete</a>
                        </td>						
                      </tr>";
					  }

					 ?>
					 </tbody>
				 </table>
			<br><br>
			<hr>
			<br><br>
		<div id="add-class_header" class="class_header"></div>
		<h1>Step 1: Name your new class</h1>
		<!--oski-->
		<form method="POST" action="addingclass.php">					
		<input name="ClassName" type="text" placeholder="Enter class name here" maxlength="30" required/>&nbsp;&nbsp;&nbsp;
		<button name="submit" type="submit">Create Class</button>		
		<br><br>
		</form>
	
		<h1>Step 2: Add Students</h1>
		<p>Select enrolled student in your class.</p>	
		<table>
				<thead>
                    <tr>
						<th>
                            Username
                        </th>
                        <th>
                            FullName
                        </th>
                        <th>
                          	Section
                        </th>
						 <th>
                            Action
                        </th>      
				<?php
					 include('connection.php');
                    
                                            
					 $qry = "SELECT Username,Firstname,Lastname,Middlename,Section FROM student_login ORDER BY Lastname ASC";
					 $result = mysql_query($qry);
						while($qry = mysql_fetch_array($result))
						{
						$User = $qry['Username'];
						$fname = $qry['Firstname'];
						$lname = $qry['Lastname'];
						$mname = $qry['Middlename'];
						$Section = $qry['Section'];
						
					echo "
                       <tr class='success'>
							<td>
	                            $User
	                        </td>
	                        <td>
	                            $lname , $fname $mname
	                        </td>
	                        <td>
	                            <select name='section'>
	                            	<option>
	                            		<?php echo $Section; ?> 
	                               	</option>
	                               	<?php 
	                               }
	                               ?>
	                            </select>
	                        </td>
	                        <td>
	                        	<a href='addstudent.php?Username=$User'>ADD</a>
	                        </td>						
                      </tr>";
					  }
                     
					 ?>

					 </tbody>
				 </table>
			<br><br><br><br>				
			
		</div>
	</div>
</div>
</body>
</html>
