
<?php 
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ../../Login_Page/login.php");
        exit;
    }
    if(time()-$_SESSION["login_time_stamp"] >18000)   
    { 
        session_unset(); 
        session_destroy(); 
        header("location: ../../Login_Page/login.php"); 
    }
    $host="localhost:3306";
    $username="root";
    $password="";
    $database="login";
    $conn = new mysqli($host,$username,$password,$database);

    $atp  = $_POST['atp'];
    $tn = $_POST['tn'];
    $mn = $_POST['mn'];
    $mr = $_POST['mr'];
    $mode = $_POST['mode'];
    //$qry1 = "select * from tenant_transaction where meter_number='$mn'";
    //$res = $conn->query($qry1);
    function function_alert($message) {
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
   // if($res->num_rows){
   //     function_alert("Id must be unique");
    //    echo "<script>window.location.href = 'index.php'</script>";
    //}
    $qry2 = "insert into tenant_transaction(transaction_no,meter_reading,meter_number,amount_paid,mop) values ('$tn','$mr','$mn','$atp','$mode')";
    if($conn->query($qry2)){
        function_alert("Details added successfully");
        echo "<script>window.location.href = 'getdetails.php'</script>";
    }
    else
    {
        function_alert("Unsuccessful");
    }
?>