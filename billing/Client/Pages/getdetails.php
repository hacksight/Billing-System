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
<?php require ('../../Client/Pages/Client_header.html');?> 	
    <section id='sectionid'>
        <button  id='inpsubmit' name='submit' class="btn btn-dark" data-target="#add_paymnt" data-toggle="modal">Add Payment</button>
        <input type="text" class="btn btn-light" id="inpsearch" placeholder="SEARCH" /><br>
        <div class="container-fluid">       
            <h1>My Transaction History</h1>        

            <?php
                  $connection =mysqli_connect("localhost:3306","root","");
                  $db= mysqli_select_db($connection,'login') ;
                  $query= "SELECT * FROM tenant_transaction";
                  $query_run= mysqli_query($connection, $query);
              ?>        
        
        <table id='tbltable' class="table table-bordered">
            <thead>
                <tr class="text-light">
                    <th>Date of Transaction</th>
                    <th>Transaction ID</th>
                    <th>Mode of Payment</th>
                    <th>Meter Reading</th>
                    <th>Amount Paid</th>
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
                    <td><?php echo $row['date_of_transaction']?></td>
                    <td><?php echo $row['transaction_no']?></td>
                    <td><?php echo $row['mop']?></td>
                    <td><?php echo $row['meter_reading']?></td>
                    <td><?php echo $row['amount_paid']?></td>
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
    // $query_run= mysqli_query($connection, $query);
    //           if ($query_run)
    //               {
    //                 foreach($query_run as $row)
    //                 {
    //                 include 'view_details_owner.php';
    //                 include 'view_tenants.php';
	// 				include 'update_user.php';
    //                 }
    //             }
    //             else
    //               {
    //                 echo "No record";
    //               }
    ?>
    <div id="add_paymnt" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-content">
        <div class="modal-header" style="font-size:18px;"><b>Payment Details</b></div>
        <div class="modal-body">
          <form action="addpay.php" method="post" onsubmit = "return validate();">    
          <div class="form-group">
              <label>Enter Amount To be Paid:</label>
              <input type="number" class="form-control" id = "atp" name="atp" placeholder="Enter Amount" required onblur = "return v_atp();"></input>
              <label id="err_atp"></label>
          </div>
          <div class="form-group">
              <label>Enter Transaction Number:</label>
              <input tye="number" class="form-control" id = "tn" name="tn" placeholder="Enter Transaction Number" required onblur = "return v_tn();"></input>
              <label id="err_tn"></label>
          </div>
          <div class="form-group">
              <label>Enter Meter Reading:</label>
              <input tye="number" class="form-control" id = "mr" name="mr" placeholder="Enter Meter Reading" required onblur = "return v_mr();"></input>
              <label id="err_mr"></label>
          </div>
          <div class="form-group">
              <label>Select Mode of Payment:</label>
              <select id="selectmode" name="mode" class="form-control" required>
								<option>Paytm</option>
								<option>PhonePay</option>
								<option>UPI</option>
								<option>NEFT/RTGS</option>
								<option>Net Banking</option>
                                <option>Cash</option>
							</select>
          </div>
          <div class="form-group">
              <label>Enter Meter Number:</label>
              <input type="number" class="form-control" id = "mn" name="mn" placeholder="Enter Meter Number" required onblur = "return v_mn();"></input>
              <label id="err_mn"></label>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
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
