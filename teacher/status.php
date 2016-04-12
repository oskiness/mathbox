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
	.design
	 {
	  margin: auto;
	  position:absolute;
	  font-size:30px; 
	  font-family:Comic Sans MS;
	}
#header{
	margin-left: auto;
	padding: 10px;
	width: 750px;
	height: 50px;	
	background-color: #4CBB17;
	display: inline-block; 
}
#header a{
	color: #FFFFFF;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 20px;
	text-decoration: none;
}

table {
  display: block;
  font-family:"Comic Sans MS", cursive, sans-serif;
  -webkit-font-smoothing: antialiased;
  font-size: 13.5px;
  overflow: auto;
  width: auto;
  margin: auto;
 }

  th {
  	border-top: 5px;
  	border-radius: 5px;
    background-color: #0790E0;
    color: white;
    font-weight: normal;
    padding: 10px 10px;
    text-align: center;
  }

  td {
  	border-radius: 5px;
    background-color: rgb(238, 238, 238);
    color: #000000;
    padding: 5px 10px;
  }
  a{
  	text-decoration: none;
  }

.hide {
    display: none;
}
.show {
    display: block;
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
		<div id="header" class="header_wrapper">
			<a href="status.php"><img src="img/Student2.png" height="50" width="50">Pending Student Accounts</a><br>
		</div>
		<br><br><br>

		 <select name="Section">
                <?php
                    include('connection.php');
                    $qry = "SELECT Section from tblsection";
                    $rsl = mysql_query($qry);
                    while($qry = mysql_fetch_array($rsl)){
                        $Section = $qry['Section'];
                        ?>
                        
                <option><?php echo $Section; ?></option>
                        
                        <?php
                    }
                ?>

            </select>
               <button name="submit" onclick="toggleVisibility('table', this);">Submit</button>	
           <div id="table" class="hide" class="">
	 		

           <form method="POST" action="">
	 		<table >
				<thead>
				<?php
                include('connection.php');
                $qry = "SELECT Section from tblsection Where ID = 1";
                $rsl = mysql_query($qry);
                while($qry = mysql_fetch_array($rsl)){
                    $Section = $qry['Section'];
                    ?>
			
				 <?php
				   }
                 ?>
                    <tr>
                   		 <th>
                           Student ID
                        </th>
						<th>
                            Username
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                          	Section
                        </th>
                        <th>
                          	Fullname
                        </th>
                        <th>
                          	Email address
                        </th>
						 <th>
                            Action
                        </th>	
                    </tr>
                </thead>
                <tbody>
				 <?php 
					 include('connection.php');
                     
					 $qry = "SELECT StudentID, Username, Password, Section, Firstname, Lastname, Middlename, EmailAddress FROM student_login where Section='WISDOM' AND status='No'";
					 $result = mysql_query($qry);
						while($qry = mysql_fetch_array($result))
						{
						$StudentID = $qry['StudentID'];
						$user = $qry['Username'];
						$pass = $qry['Password'];
						$section = $qry['Section'];
						$fname 	= $qry['Firstname'];
						$lname 	= $qry['Lastname'];
						$mname 	= $qry['Middlename'];
						$email = $qry['EmailAddress'];
					echo "
                        <tr class='success'>
                        <td>
                            <center>$StudentID
                        </td>
						<td>
                            $user
                        </td>
                        <td>
                            $pass
                        </td>
                        <td>
                            $section
                        </td>
                        <td>
                            $lname , $fname $mname
                        </td>
                        <td>
                            $email
                        </td>
                        <td>
                        	<a href='studconfirm.php?StudentID=$StudentID'>Confirm</a>
                        </td>						
                      </tr>";
					  }

					 ?>
					 </tbody>
				 </table>
				</form>
		</div>
</div>
<script>
        function toggleVisibility(id, btn) {
                var el = document.getElementById(id);
 
            if (el.className === "Submit")
             {
                el.className = "Submit";
            } 
            else 
            {
                el.className = "Submit";
                btn.innerHTML = "Submit";
            }
        }
    </script>
</body>
</html>
