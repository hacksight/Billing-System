
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
    $host="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn = new mysqli($host,$username,$password,$database);

    $password  = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $phone  = $_POST['phone'];
    $qry1 = "select * from owner_details where mail='$mail'";
    $res = $conn->query($qry1);
    function function_alert($message) {
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
    if($res->num_rows){
        function_alert("Id must be unique");
        echo "<script>window.location.href = 'index.php'</script>";
    }
    $qry2 = "insert into owner_details(password,fname,lname,address,mail,phone) values ('$password','$fname','$lname','$address','$mail','$phone')";
    if($conn->query($qry2)){
        function_alert("Details added successfully");
        echo "<script>window.location.href = 'getdetails.php'</script>";
    }
    else
    {
        echo "unsuccessful";
    }
?>