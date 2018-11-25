<?php
  
session_start();
if(isset($_SESSION['email']))
{
  header('location:jsontojquery.php');
} 
    if(isset($_GET['logout']))
    {
   unset($_SESSION['email']);
     session_destroy();
     header('location:homepage.php');
   }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Freshoo!!</title>
    <link href="../css/business-casual.css" rel="stylesheet">
</head>

<body background="../img/dashb1.jpg">
  <div class="brand">Freshoo!!</div>
  <div class="address-bar">Feel the essence of your health</div>
  <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a> </li>
                    <li><a href="homepage.php">About</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
  <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    
      <!-- Modal content-->
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Welcome to freshooo!!</h4>
      </div>
      <div class="modal-body">
          <ul class="list-group">
              <li class="list-group-item"><a href="../retailer_reg.html">Reailer Sign Up</a></li>
              <li class="list-group-item"><a href="../cust_reg.html">Customer Sign Up</a></li>         
          </ul>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </div>
      
 </div>
</div>  
</div>
 <div class="container">
  <!-- Modal -->
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Welcome to freshooo!!</h4>
        </div>
       <div class="modal-body">
          <ul class="list-group">
              <li class="list-group-item"><a href="login.php">Reailer Login</a></li>
              <li class="list-group-item"><a href="cust_login.php">Customer Login</a></li>                
           </ul>
        </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
</div>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="../img/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/green.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/hello.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Freshoo!!</h1>
                    <hr class="tagline-divider">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Know Something
                        <strong>worth visiting</strong>
                    </h2>
                   <p>We can help you eat more fruits and make your health wealth.Eating healthy can be a problem for some people. Our fast-paced world doesn’t always allow for people to sit down and enjoy a nice, balanced meal. While it may be easier to grab a burger and go, taking an extra couple of minutes to eat an apple or a banana makes all the difference.<br><br>

                    So, the next time you reach for a Twinkie or a greasy burger, remember that you could just as easily replace those with some grapes, or an apple simply by visiting FRESHOO!!.<br> <br>

                    We provide a platform for retailers to sell fruits and fix prices according to their wish and even customers can purchase fruits in interested store.
                  </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Delicious
                        <strong>fruits</strong>
                    </h2>
                    <hr>
                    <img src="../img/giri1.jpg" style="align-self: center;">
                </div>
            </div>
        </div>

    </div>

 
</body>
</html>
