<?php 
include('connection.php');
if(isset($_POST['submit'])){

$id = $_POST['studid'];
$user = $_POST['username'];
$Pass = $_POST['password'];
$email = $_POST['EmailAddress'];

$qry = "select * from student_login where Username ='$id'";
$result = mysql_query($qry);
if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('Firstname is already Existed');
            location.href='studenthome.php';
          </script>";

        }
        else 
        {
        mysql_query("Update student_login set Username = $user where StudentID = $id");
        mysql_query("Update student_login set Password = $Pass where StudentID = $id");
          echo 
          "<script type='text/javascript'>
              alert('Your account is not yet Activated Please ask your teacher.');
              location.href='../login.php';
          </script>";
          
          
        }
    }
  }
?>