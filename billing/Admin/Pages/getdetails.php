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
    <?php require 'header2.html'?>
    <section id='sectionid'>
        <button  id='inpsubmit' name='submit' class="btn btn-dark" onclick='document.location="deleteowner.php"'>Delete Owner</button>
        <button  id='inpsubmit' name='submit' class="btn btn-dark" data-target="#add_ownr" data-toggle="modal">Add New Owner</button>
        <input type="text" class="btn btn-light" id="inpsearch" placeholder="SEARCH" /><br>
        <div class="container-fluid">       
            <h1>Owner Details</h1>        

            <?php
                  $connection =mysqli_connect("localhost","root","");
                  $db= mysqli_select_db($connection,'login') ;
                  $query= "SELECT * FROM owner_details";
                  $query_run= mysqli_query($connection, $query);
              ?>        
        
        <table id='tbltable' class="table table-bordered">
            <thead>
                <tr class="text-light">
                    <th>Name</th>
                    <th>Mail ID</th>
                    <th>Phone</th>
                    <th>Owner Transactions</th>
                    <th>Tenant Details</th>
                    <th>Update</th>
                </tr>
            </thead>
        
            <tbody id="tbltbody">
            <?php
                  if ($query_run)
                  {
                    foreach($query_run as $row)
                    {
              ?>

            <tr>
                    <td><b><u><a data-toggle="modal" data-target="#view_modal<?php echo $row['ID']?>"><?php echo $row['fname']?> <?php echo $row['lname']?></a></u></b> </td>
                    <td><?php echo $row['mail']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><a href = "view_histry_ownr.php">View <?php echo $row['fname']?> <?php echo $row['lname']?> History</a></td>
                    <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view_tenant_modal<?php echo $row['ID']?>"><span class="glyphicon glyphicon-eye-open"></span> Tenant Details</button></td>                
                    <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['ID']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
                    </tr> 
                <?php
                    //include 'view_details_owner.php';
                    //include 'view_tenants.php';
					//include 'update_user.php';
                    }
				?>
    </tbody>
    <?php   
                    
                  }
                  else
                  {
                    echo "No record";
                  }
              ?>  
    </table>

    </section>

    <?php
    $query_run= mysqli_query($connection, $query);
              if ($query_run)
                  {
                    foreach($query_run as $row)
                    {
                    include 'view_details_owner.php';
                    include 'view_tenants.php';
					include 'update_user.php';
                    }
                }
                else
                  {
                    echo "No record";
                  }
    ?>
    <div id="add_ownr" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-content">
        <div class="modal-header" style="font-size:18px;"><b>Enter Details</b></div>
        <div class="modal-body">
          <form action="addowner.php" method="post" onsubmit = "return validate();">    
          <div class="form-group">
              <label>Enter Email Id:</label>
              <input type="text" class="form-control" id = "mail" name="mail" placeholder="Enter Mail Id" required onblur = "return v_email();"></input>
              <label id="err_mail"></label>
          </div>
          <div class="form-group">
              <label>Enter Password:</label>
              <input tye="password" class="form-control" id = "password" name="password" placeholder="5 letters minimum with at least special character" required onblur = "return v_psswd();"></input>
              <label id="err_psswd"></label>
          </div>
          <div class="form-group">
              <label>Confirm Password:</label>
              <input tye="password" class="form-control" id = "cpassword" name="cpassword" placeholder="Must be same as password" required onblur = "return v_cpsswd();"></input>
              <label id="err_cpsswd"></label>
          </div>
          <div class="form-group">
              <label>Enter First Name:</label>
              <input type="text" class="form-control" id = "fname" name="fname" placeholder="Enter First Name" required onblur = "return v_name();"></input>
              <label id="err_name"></label>
          </div>
          <div class="form-group">
              <label>Enter Last Name:</label>
              <input type="text" class="form-control" id = "lname" name="lname" placeholder="Enter Last Name" required onblur = "return v_name();"></input>
              <label id="err_name"></label>
          </div>
          <div class="form-group">
              <label>Enter Address:</label>
              <input type="text" class="form-control" id = "address" name="address" placeholder="Enter Address" required></input>
              <label id="err_add"></label>
          </div>
          <div class="form-group">
              <label>Enter Phone no.:</label>
              <input type="number" class="form-control" id = "phone" name="phone" placeholder="Enter Phone No." required  onblur = "return v_contact();"></input>
              <label id="err_phone"></label>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary">Register</button>&nbsp;
          <button type="reset" class="btn btn-primary">Cancel</button>
          </form>
        </div>
      </div>
  </div>


   
  

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
