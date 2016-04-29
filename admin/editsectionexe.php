<?php 
include('connection.php');
session_start();
$_SESSION['Username'];
$admin = $_SESSION['Username'];
if(isset($_POST['submit'])){

$section = $_POST['section'];
$prof =$_POST['teacher'];


$qry = "select ID,Section,Prof from tblsection where ID ='$CID'";
$result = mysql_query($qry);

if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='editsection.php';
          </script>";
        }
        else 
        {
          mysql_query("UPDATE tblsection set Section = $section where Username = $admin");
          mysql_query("UPDATE tblsection set Prof = $prof where Username = $admin");
      
          echo
          "<script type='text/javascript'>
              alert('Update Successful.');
              location.href='sectionmaintenance.php';
          </script>";
          
          
        }
    }
  }
?>