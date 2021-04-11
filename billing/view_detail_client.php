<?php
   session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
    }
    if(time()-$_SESSION["login_time_stamp"] >1800)   
    { 
        session_unset(); 
        session_destroy(); 
        header("location:login.php"); 
    } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tenent's Details</title>
    <title>Welcome-<?php $_SESSION['username']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/getdetails.css">
    <link href="assets/css/foot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
    <?php require 'header2.html'?>
    <section id='sectionid'>
        <button  id='inpsubmit' name='submit' class="btn btn-dark" onclick='document.location="addowner.php"'>Add New Tenent</button>
        <input type="text" class="btn btn-light" id="inpsearch" placeholder="SEARCH" /><br>
        <div class="container-fluid">       
            <h1>Tenent Details</h1>                 
        <table id='tbltable' class="table table-bordered">
            <tr class="text-light">
        <th>Client Name</th>
        <th>Owner name</th>
        <th>Total Amount</th>
        <th>Due Date(YYYY-MM-DD)</th>
        <th></th>
    </tr>
    <tbody id="tbltbody">
    <tr>
        <td>client1</td>
        <td>owner1</td>
        <td>0</td>
        <td>-</td>
        <td><a href="view_histry_client.php">View Transactions</a></td>
    </tr>
    <tr>
        <td>client2</td>
        <td>owner1</td>
        <td>1785</td>
        <td>2021-04-15</td>
        <td><a href="#">View Transactions</a></td>
    </tr>
    <tr>
        <td>client3</td>
        <td>owner1</td>
        <td>0</td>
        <td>-</td>
        <td><a href="#">View Transactions</a></td>
    </tr>
    <tr>
        <td>client4</td>
        <td>owner1</td>
        <td>1785</td>
        <td>2021-04-15</td>
        <td><a href="#">View Transactions</a></td>
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

    
    <?php require 'footer.html'?>
</body>
</html>
