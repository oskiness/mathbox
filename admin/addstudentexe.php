<?php
			include('connection.php');
			if(isset($_POST['submit'])){

				$fname	= $_POST['firstname'];
				$lname	= $_POST['lastname'];
				$mname	= $_POST['middlename'];
				$section = $_POST['section'];

				$qry = "select * from student_login where Firstname= '$fname'";
				$result = mysql_query($qry);
				if($result)
				{
					if(mysql_num_rows($result)> 0 )
					{
						echo "<script>
							  alert('teacher Existed');
							  location.href='addstudent.php';</script>";
					}
					else
						{
							mysql_query("INSERT into student_login(Firstname,Lastname,Middlename,Section) values('$fname','$lname','$mname','$section')");
							echo 
							"<script type='text/javascript'>
							 alert('Your Have been Add a teacher.');
             				 location.href='studentmaintenance.php';
         					 </script>";
          
						}
				}
			}

		?>