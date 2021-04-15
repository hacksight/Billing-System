<?php
   session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ../../Login_Page/login.php");
        exit;
    }
    if(time()-$_SESSION["login_time_stamp"] >1800)   
    { 
        session_unset(); 
        session_destroy(); 
        header("location: ../../Login_Page/login.php"); 
    }

    $host="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn = new mysqli($host,$username,$password,$database);

//--------delete owner----------
if(isset($_POST['rmv'])){
    $mail=$_POST['rmv'];
for($i=0;$i<sizeof($mail);$i=$i+1)
{
  $de_mail = $mail[$i];
  $qry="delete from owner_details where mail ='$de_mail'";
  if($conn->query($qry)){
    echo "<script>alert('Deleted successfully'); window.location.href = 'getdetails.php'; </script>";
  }
  else
  {
      echo "<script>alert('Error!!!'); window.location.href = 'getdetails.php'; </script>";
  }
}
}
?>