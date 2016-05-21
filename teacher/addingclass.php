<?php
			include('../connection.php');
			if(isset($_POST['submit'])){

				$CName = $_POST['ClassName'];

				$qry = "select * from tblsection where Section= '$CName'";
				$result = mysql_query($qry);
				if($result)
				{
					if(mysql_num_rows($result)> 0 )
					{
						echo "<script>
							  alert('Class Existed');
							  location.href='addclass.php';</script>";
					}
					else
						{
							mysql_query("INSERT into tblsection(Section) values('$CName')");
							echo 
							"<script type='text/javascript'>
							 alert('Your Have been create a class.');
             				 location.href='addclass.php';
         					 </script>";
          
						}
				}
			}

		?>