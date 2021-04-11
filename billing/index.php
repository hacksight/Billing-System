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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILLING SYSTEM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS_temp.css"/>
    <link href="assets/css/foot.css" rel="stylesheet">
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
  <?php require 'header2.html'?>	
	<main>
	<br>
	<hr> 
  <div class="container-fluid">
  	<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn" >40<br>Number of Clients</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">40000<br>Total electricity consumed (KWh)</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">400<br>Clients with no dues</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">40<br>Clients with dues</p>
      </div>
      <div class="col-md-2 col-sm-12">
              <p class="adm-btn">4000<br>Total payment till now</p>
      </div>
      <div class="col-md-1"></div>
    </div> 
  </div>
    
	<hr>
	
		<div class="container-fluid ">
              <div class="row text-center">
                <div class="colmd-1"></div>
                <div class="col-md-5 col-sm-6 categories" style="left: 8%;"><img class="img-fluid" src="bill_Image\p1.jpg"></img></div>
                <div class = "col-md-1"></div>
				        <div class="col-md-4 col-sm-6 categories" style="left: 6%;"> 
				          <table class="table table-responsive"> 
                    <tr>
                      <th width=40%>Clients</th>
                      <th width=30%>Meter Reading</th>
                      <th width=30%>Amount</th>
                    </tr>
                    <tr>
                      <td>Riya</td>
                      <td>4000</td>
                      <td>3400</td>
                    </tr>
                    <tr>
                      <td>Ritika</td>
                      <td>3000</td>
                      <td>2800</td>
                    </tr>
                    <tr>
                      <td>Aryan</td>
                      <td>6000</td>
                      <td>5000</td>
                    </tr>
                    <tr>
                      <td>Kavya</td>
                      <td>5000</td>
                      <td>4800</td>
                    </tr>
                    <tr>
                      <td>Rajesh</td>
                      <td>8000</td>
                      <td>6000</td>
                    </tr>
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
    <?php require 'footer.html'?>

</body>
</html>