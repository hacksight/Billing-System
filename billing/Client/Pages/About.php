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
        
    <div class="container">
    
        <div class="col-md-11 col-sm-3" >
             
                <p id="ab">Adhunik Automation India is a privately owned organization with its head office in Ghaziabad, Uttarpradesh. We are leading in the offering of the latest Industrial automation technology products in HVAC, Refrigeration, 
                Food & Beverages Our specialization in the design, implementation and commissioning of the turn-key total automation 
                solutions enable us to provide end-to-end comprehensive solutions through integration of automation products.
                <br><br>
                Founded in 2004, Adhunik Automation India, a proprietary organization evolved into Adhunik Automation India organization in 2013 by its heritage in AUTOMATION SYSTEM SOLUTIONS which allows organization to offer a even 
                    more wide variety of automation products and engineering services to its customers.
                <br><br>
                At Adhunik Automation India, we help our customer succeed and grow with industrial automation control and solutions designed to give our customers a competitive advantage. From stand-alone, industrial components 
                    to enterprise-wide integrated systems, our solutions have proven themselves across a wide range of industries and in some of the most demanding manufacturing environments.
                Contractors, End users and machine builders (OEMs) alike rely on our comprehensive portfolio of products, software & services to deliver value and help them meet their objectives:
                <br><br>
                Faster time to market — through the speed, responsiveness and flexibility of automated manufacturing.
                <br><br>
                Lower total cost of ownership — through scalable, modular, energy-efficient and open automation control and information systems.
                <br><br>
                We are committed to putting our customers’ needs first. We are specialists in distribution, system integration and product referencing. Simply put, we’re there with the right solution when and where our customers need us. And we’re well-positioned to provide leading edge solution for years to come.
                <br><br>
                As such we have proved ourselves as a one-stop shop for industry’s complete automation needs.
                <br><br>
                Adhunik Automation India builds control panels of all sizes and complexity from multi-bay to wall or machine mounted enclosures. We offer a complete design and programming service or we are equally happy to produce to our customers own design and specification.
                <br><br>
                We can provide control panel system with complete documentation for your application using the highest quality components at a competitive price and with speedy delivery. Electrical Wiring and Installation as part of our total solutions package Adhunik Automation India offer electrical services using industry standard
                software to produce our own designs. To ease installation we will include schematics, bills of materials, purchase order lists and point to point wiring lists.
                <br><br>
                We work closely with installers of equipment to meet their requirement and to provide final commissioning of the control system at completion. Adhunik Automation India have produced designs and installed industrial solutions at sites throughout India and for many different industry sectors.
            </p>
        </div>
    </div>
        
        <hr>

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