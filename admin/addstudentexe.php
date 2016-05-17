<?php
			include('connection.php');
			if(isset($_POST['submit'])){

				$user = $_POST['Username'];
				$fname	= $_POST['firstname'];
				$lname	= $_POST['lastname'];
				$mname	= $_POST['middlename'];
				$section = $_POST['section'];
				$Confirm = 1;
				$Prof = 'Gabby';
				$status = 'Registered';
				$Active = 'Yes';


				$qry = "select * from student_login where Firstname = '$fname'";
				$result = mysql_query($qry);
				if($result)
				{
					if(mysql_num_rows($result)> 0 )
					{
						echo "<script>
							  alert('Student Existed');
							  location.href='addstudent.php';</script>";
					}
					else
						{
							mysql_query("INSERT into student_login(Username,Firstname,Lastname,Middlename,Section,Confirm,Prof,Status,Active) values('$user','$fname','$lname','$mname','$section','$Confirm','$Prof','$status','$Active')");

							mysql_query("UPDATE student_login set Password ='student'");
							echo 
							"<script type='text/javascript'>
							 alert('Successfully adding Student.');
             				 location.href='studentmaintenance.php';
         					 </script>";
          
						}
				}
			}

		?>