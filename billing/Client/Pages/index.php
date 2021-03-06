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
    <link rel="stylesheet" href="../../assets/css/dashboard.css"/>
    <link href="../../assets/css/foot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	    <script>
    //$(document).ready(function(){
     // $('[data-toggle="collapse"]').on('mouseenter',function(){
      //  var oldUrl = $(this).attr("href");
        //document.write(oldUrl);
      //  $(oldUrl).collapse('show');
      //});
      //$('[data-toggle="collapse"]').on('mouseleave',function(){
       // var oldUrl = $(this).attr("href");
       // $('.collapse').collapse('hide');
      //});
    //});
  </script>
  </head>
  <body>
  <?php require ('Client_header.html');?> 	
	<main>
	<br>
	<hr> 
  <div class="container-fluid">
  	<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn" >4078<br>Monthly Electricity Consumption (KWh)</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">346567<br>Total electricity consumed (KWh)</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">3855<br>Amount to Pay</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">2000<br>Total Payed this month</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">400000<br>Total Payed till now</p>
      </div>
      <div class="col-md-1"></div>
    </div> 
  </div>
    
	<hr>
	
		<div class="container-fluid">
              <div class="row text-center">
                <div class="colmd-1"></div>
                <div class="col-md-5 col-sm-6 categories" style="left: 8%;"><img class="img-fluid" src="../../images/p1.jpg"></img></div>
                <div class = "col-md-1"></div>
				        <div class="col-md-4 col-sm-6 categories tblcont" style="left: 6%;"> 
				          <table class="table table-responsive" id="tbltable"> 
                    <tr class="text-light">
                      <th width=40%>Date Of Payment</th>
                      <th width=30%>Meter Reading</th>
                      <th width=30%>Amount</th>
                    </tr>
                    <tbody id="tbltbody">
                    <tr>
                      <td>01/01/2021</td>
                      <td>4000</td>
                      <td>3400</td>
                    </tr>
                    <tr>
                      <td>01/02/2021</td>
                      <td>3000</td>
                      <td>2800</td>
                    </tr>
                    <tr>
                      <td>01/03/2021</td>
                      <td>6000</td>
                      <td>5000</td>
                    </tr>
                    <tr>
                      <td>01/04/2021</td>
                      <td>5000</td>
                      <td>4800</td>
                    </tr>
                    <tr>
                      <td>01/05/2021</td>
                      <td>8000</td>
                      <td>6000</td>
                    </tr>
                    </tbody>
                </table>
                </div>
        </div>
	</main>
		
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sh   a384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
    crossorigin="anonymous"></script>    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
    <script src="web.js"></script>-->
    <?php require '../../footer.html'?>

</body>
</html>