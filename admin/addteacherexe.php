<?php
			include('../connection.php');
			if(isset($_POST['submit'])){
				
				$user ='prof';
				$pass ='prof';
				$fname	= $_POST['firstname'];
				$lname	= $_POST['lastname'];
				$mname	= $_POST['middlename'];
				$section = $_POST['section'];

				$qry = "select * from teacher_login where Firstname= '$fname'";
				$result = mysql_query($qry);
				if($result)
				{
					if(mysql_num_rows($result)> 0 )
					{
						echo "<script>
							  alert('teacher Existed');
							  location.href='addteacher.php';</script>";
					}
					else
						{
							mysql_query("INSERT into teacher_login(Username,Password,Firstname,Lastname,Middlename,Section,Active) values('$user','$pass','$fname','$lname','$mname','$section','Yes')");
							echo 
							"<script type='text/javascript'>
							 alert('Successfully add Teacher.');
             				 location.href='teachermaintenance.php';
         					 </script>";
          
						}
				}
			}

		?>