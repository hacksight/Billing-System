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
    header("location:../../Login_Page/login.php"); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhunik Automations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="../../assets/css/dashboard.css"/>-->
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/header.css" rel="stylesheet">
    <link href="../../assets/css/foot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body style="background-color:white;">
  <?php
    require("conn.php");
    $username = $_SESSION['username'];
    $qry = "Select * from bill_details where client_id = '$username'";
    $row = $connection->query($qry);
    $res = $row->fetch_array();
    $meter_no = $res['meter_no'];
    $qry1 = "Select * from tenant_details where meter_no = '$meter_no'";
    $row1 = $connection->query($qry1);
    $res1 = $row1->fetch_array();
  ?>
    <header>
        <div>
            <img style = "margin-left:2%" class="navbar-brand" src = "../../images/download.png">
            <div class="float-right" style = "margin-right:3%; margin-top:1%"><b>Address: </b>Adhunik Automations pvt. ltd.<br><b>Contact: </b>1800-1000-4848</div>
            <hr style="height: 12px;" width="100%" color="gray">
        </div>
    </header>
    <main>
      <div>
        <div class="col-md-12 container float-left">
        <b>Name:</b> <?php echo $res1['t_fname'].' '.$res1['t_lname']; ?><br>
        <b>E-mail:</b><?php echo $res1['t_mail']; ?><br>
        <b>Address:</b><?php echo $res1['t_address']; ?><br>
        <b>Contact:</b><?php echo $res1['t_phone']; ?><br>
        <hr style="height: 1px;" width="100%" color="gray">
        </div>
        <div class="container">
          <table class="table table-striped">
            <tr>
              <th>Meter No.</th>
              <th>Date Mailed(YYYY-MM-DD)</th>
              <th>Due Date(YYYY-MM-DD)</th>
            </tr>
            <tr>
              <td><?php echo $res['meter_no']; ?></td>
              <td>2021-04-25</td>
              <td><?php echo $res['due_date'];   ?></td>
            </tr>
          </table>
          <hr style="height: 1px;" width="100%" color="gray">                    
        </div>
        <div class="row container">
          <div class="col-md-6">
          <table class="table table-striped">
            <tr>
              <th>Previous Reading</th>
              <td><?php echo $res['previous'];   ?></td>
            </tr>
            <tr>
              <th>Current Reading</th>
              <td><?php echo $res['reading'];   ?></td>
            </tr>
            <tr>
              <th>Fixed Charge</th>
              <td>100Rs.</td>
            </tr>
            <tr>
              <th>Amount</th>
              <td><?php echo $res['balance'].'Rs.'; ?></td>
            </tr>
            <tr>
              <th>Payble Amount</th>
              <td><?php echo ($res['balance']+100).'Rs.'; ?></td>
            </tr>
          </table>     
          </div>       
          <div class="col-md-6">
            <img src = "../../images/graph.png" alt="graph">
          </div>       
        </div>
      </div>
    </main>
  </body>
</html>