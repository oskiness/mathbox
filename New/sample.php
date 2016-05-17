<?php
include('connection.php');

$sql = "Select a.ID, a.name, b.marks from student a, marks b where a.ID = b.ID and b.total > (Select total from marks where ID = '2'");
echo $sql;
?>

<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>