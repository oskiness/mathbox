<?php 
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];


$qry1 = mysql_query("select * from teacher_login where Username = '$username' and Password = '$password'");
$qry2 = mysql_query("select * from student_login where Username = '$username' and Password = '$password'");
$qry3 = mysql_query("select * from admin_login where Username = '$username' and Password = '$password'");
if($qry1 && $qry2 && $qry3) //checheck if TRUE yung query ko (kung tama)
{
 if(mysql_num_rows($qry1)>0) //chcheck if existing ba sya sa TABLE (tblaccounts)
      {

      $_SESSION['Username'] = $username;
      echo "<script>
          alert('login Success');location.href='teacher/teacherhome.php';</script>";
           //parang form1.show to malilipat sya sa home.php
            //tapos sa home.php gawa ka ng session
      }
    elseif(mysql_num_rows($qry2)>0) //chcheck if existing ba sya sa TABLE (tblaccounts)
      {
      $_SESSION['Username'] = $username;
      echo "<script>
          alert('login Success');location.href='STUDENT/index.php';</script>";
           //parang form1.show to malilipat sya sa home.php
            //tapos sa home.php gawa ka ng session
      }
    elseif(mysql_num_rows($qry3)>0) //chcheck if existing ba sya sa TABLE (tblaccounts)
      {
      $_SESSION['Username'] = $username;
      echo "<script>
          alert('login Success');location.href='admin/index.php';</script>";
           //parang form1.show to malilipat sya sa home.php
            //tapos sa home.php gawa ka ng session
      }
    else
      {
      echo "<Script>alert('Incorrect Username or Password'); location.href='login.php';</script>"; 
      }
    


}
}
?>