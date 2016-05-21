<?php 
include('../connection.php');
if(isset($_POST['submit'])){

$Question = $_POST['question'];
$Ch1 = $_POST['answer1'];
$Ch2 = $_POST['answer2'];
$Ch3 = $_POST['answer3'];
$Ch4 = $_POST['answer4'];
$Ans = $_POST['final_answer'];

$qry = "select * from tblquestion where Question ='$Question'";
$result = mysql_query($qry);
if($result)
    {
        if(mysql_num_rows($result) > 0 )
        {
          echo "<script>
            alert('already existed');
            location.href='addquiz.php';
          </script>";

        }
        else 
        {
        mysql_query("INSERT into tblquestion(Question,Choice1,Choice2,Choice3,Choice4,Answer) values('$Question','$Ch1','$Ch2','$Ch3','$Ch4','$Ans')");
          echo 
          "<script type='text/javascript'>
              alert('Add to Question Bank Successfully.');
              location.href='addquiz.php';
          </script>";
          
          
        }
    }
  }
?>