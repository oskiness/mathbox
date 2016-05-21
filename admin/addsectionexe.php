<?php
			include('../connection.php');
			if(isset($_POST['submit'])){

				$section = $_POST['Class'];

				$qry = "select * from tblsection where Section = '$section'";
				$result = mysql_query($qry);
				if($result)
				{
					if(mysql_num_rows($result)> 0 )
					{
						echo "<script>
							  alert('Class Existed');
							  location.href='addsection.php';</script>";
					}
					else
						{
							mysql_query("INSERT into tblsection(Section,Active) values('$section','Yes')");
							echo 
							"<script type='text/javascript'>
							 alert('Your Have been create a new section.');
             				 location.href='sectionmaintenance.php';
         					 </script>";
          
						}
				}
			}

		?>