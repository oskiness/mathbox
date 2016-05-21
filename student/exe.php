<?php 
include('../connection.php');
session_start();
$_SESSION['Username'];
$username = $_SESSION['Username'];
$studentID = "$username"; //static eto yung babaguhin mo oski
if(isset($_POST['submit']))
{
$score = 0;
$x = 0;
$qryz = "select * from tblpretest";
$resultz = mysql_query($qryz);
$resultz = mysql_num_rows($resultz);
while($x <= $resultz-1)
{
$x++;
$number = $_POST['number'.$x];
$answer = $_POST['answer'.$x];

$qry = "select * from tblpretest where ID = $number";
$result = mysql_query($qry);
while($qry = mysql_fetch_array(($result)))
{
	$q1 = $qry['Question'];
	$c1 = $qry['Choice1'];
	$c2 = $qry['Choice2'];
	$c3 = $qry['Choice3'];
	$c4 = $qry['Choice4'];
	$sagot = $qry['Answer'];
	echo $sagot . "=" . $answer . "<br>";
if($sagot == $answer)
{
$score++;
echo $score;
}
}

mysql_query("insert into tblpretest_holder (studentID,ID,Question,Choice1,Choice2,Choice3,Choice4,Answer,Student_Answer)
 values ('$studentID',$x,'$q1','$c1','$c2','$c3','$c4','$sagot','$answer')");
}
mysql_query("insert into tblscore (Username,Pretest) 
	values ('$studentID',$score);");

header('location:result.php');
}
?>