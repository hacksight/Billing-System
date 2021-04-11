<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILLING SYSTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
	<script>
    $(document).ready(function(){
      $('[data-toggle="collapse"]').on('mouseenter',function(){
        var oldUrl = $(this).attr("href");
        //document.write(oldUrl);
        $(oldUrl).collapse('show');
      });
      //$('[data-toggle="collapse"]').on('mouseleave',function(){
        //var oldUrl = $(this).attr("href");
      //  $('.collapse').collapse('hide');
      //});
    });
  </script>
</head>
<body>
<header>
        <div class="container"> 
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-md-4 site-title primary-color">BILLING SYSTEM</h1>
                </div>
                <div class="col-12 text-right">
                    <p class="my-md-4 header-links third-color">
                    <button data-toggle="modal" data-target="#mymodal" class="btn-link btn">Log Out</button>
                    </p>
                </div>
            </div>  
        </div>
		<div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index_temp.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        OWNERS
                      </a>

                      <div id="owners">
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="view_details.php" class="dropdown-item"> VIEW DETAILS </a>  
                        <a href="#b" class="dropdown-item" data-toggle="collapse" >UPDATE</a>
                        <div id="b" class="navbar-nav mr-auto collapse card card-body " data-parent="#owners">
                          <ul class="menu" style="list-style-type:none">
                            <li><a class="dropdown-item" href="#">ADD USER</a>
                            <li><a class="dropdown-item" href="#">DELETE USER</a>
                          </ul>
                        </div>
                      </div>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          TENANTS
                        </a>

                        <div id="tenants">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a href="#d" class="dropdown-item" data-toggle="collapse" >VIEW DETAILS</a>
                          <a href="#e" class="dropdown-item" data-toggle="collapse" >UPDATE</a>
                          <div id="e" class="navbar-nav mr-auto collapse card card-body " data-parent="#tenants">
                            <ul class="menu" style="list-style-type:none">
                              <li><a class="dropdown-item" href="#">ADD USER</a>
                              <li><a class="dropdown-item" href="#">DELETE USER</a>
                            </ul>
                          </div>
                        </div>
                        </div>
                    </li>
					
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
	</header>
	
	<main>
<div class="row" style="margin-top:3%">
  <div class="col-md-2">
   </div>
   <div class="col-md-8">
   <table class="table table-responsive table-striped">
    <tr>
        <th>Owner name</th>
        <th>Total Amount</th>
        <th>Due Date(YYYY-MM-DD)</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td>owner1</td>
        <td>0</td>
        <td>-</td>
        <td><a href="view_detail_client.php">View Tenant Details</a></td>
        <td><a href = "view_histry_ownr.php">View Owner History</a></td>
    </tr>
    <tr>
        <td>owner2</td>
        <td>1785</td>
        <td>2021-04-15</td>
        <td><a href="#">View Tenant Details</a></td>
        <td><a href = "#">View Owner History</a></td>
    </tr>
    <tr>
        <td>owner3</td>
        <td>0</td>
        <td>-</td>
        <td><a href="#">View Tenant Details</a></td>
        <td><a href = "#">View Owner History</a></td>
    </tr>
    <tr>
        <td>owner4</td>
        <td>1785</td>
        <td>2021-04-15</td>
        <td><a href="#">View Tenant Details</a></td>
        <td><a href = "#">View Owner History</a></td>
    </tr>
   </table>
   </div>
   <div class="col-md-2">
   </div>
   </main>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sh   a384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
    crossorigin="anonymous"></script>    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
    <script src="web.js"></script>
</body>
</html>