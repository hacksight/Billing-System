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
    $qry = "select * from owner_details";
    $rs = $conn->query($qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Owner's Details</title>
    <title>Welcome-<?php $_SESSION['username']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/getdetails.css">
    <link href="../../assets/css/foot.css" rel="stylesheet">
    <script type = "text/javascript" src="../../assets/javascript/validation.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
    <?php require '../../header2.html'?>
    <section id='sectionid'>
        <input type="text" class="btn btn-light" id="inpsearch" placeholder="SEARCH" /><br>
        <div class="container-fluid">       
            <h1>Owner Details</h1>                 
        <table id='tbltable' class="table table-bordered">
          <tr class="text-light">
            <th>Owner First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email-Id</th>
            <th>Select</th>
          </tr>
    <tbody id="tbltbody">
    <form action="del_ownr.php" method="post">
    <?php while($res = $rs->fetch_array()){
      ?>
        <tr>
        <td><?php echo $res[2]; ?> </td>
        <td><?php echo $res[3] ?></td>
        <td><?php echo $res[4]; ?></td>
        <td><?php echo $res[6]; ?></td>
        <td><?php echo $res[5]; ?></td>
        
        <td><input type = "checkbox" name="rmv[]" value="<?php echo $res[5];?>"></input></td>
    <?php 
    } ?>
    <button id='inpsubmit' type="submit" name='submit' class="btn btn-dark">Remove</button>
    </form>
    </tr>
    </tbody>
    </table>
    </section>
    <script>
       $(document).ready(function() { 
                $("#inpsearch").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#tbltbody tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
    </script>    
    <?php require '../../footer.html'?>
</body>
</html>
