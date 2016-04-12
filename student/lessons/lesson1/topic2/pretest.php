<Html>
<body>
	<center><h1>Pretest</h1></center>
	<div style='border: #2a4270 1px solid; padding: 15px; width:500px; margin:auto;'>
	<form method="post" action="../../exe.php">
		<?php 
		include('../../connection.php');
		$query = "select * from tblpretest";
		$count = mysql_query($query);
		$count = mysql_num_rows($count);
		$qry = "select * from tblpretest order by rand() limit $count";
		$result = mysql_query($qry);
			$x = 0;

			while($qry = mysql_fetch_array($result))
			{
				$x++;
				$id = $qry['ID'];
				$question = $qry['Question'];
				$choice1 = $qry['Choice1'];
				$choice2 = $qry['Choice2'];
				$choice3 = $qry['Choice3'];
				$choice4 = $qry['Choice4'];
				$answer = $qry['Answer'];
echo 
"
<b>$x</b>. $question <br>

<input type='hidden' name='number$x' value='$id'><br>

<input type='radio' name='answer$x' value='$choice1' required> a.) $choice1 </input> <br>

<input type='radio' name='answer$x' value='$choice2' required> b.) $choice2 </input> <br>

<input type='radio' name='answer$x' value='$choice3' required> c.) $choice3 </input> <br>

<input type='radio' name='answer$x' value='$choice4' required> d.) $choice4 </input> <br><br>

";


			}
		?>
		<center>
			<input type="submit" style="border-radius:5px; width:200px; height:50px; background-color:skyblue;" name="submit" value="Submit Answer">
		</center>
	</form>

</div>
</body>
</html>