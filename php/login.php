<?php


?>


<!DOCTYPE html>
<html>
<head>
	 <title></title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="../css/registration.css">
	 <script type="text/javascript">
		
	</script>	
</head>
<body background="../img/bg69.jpg" style="background-repeat:no-repeat; background-size:cover;">
  <h1 style="text-align: center; color: white;"><b>Freshoo!!</b></h1>
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-12" >
     <div class="containe-fluid" ">
                <nav class="navbar navbar-default ">
                    <div class="container-fluid" >
                          <div class="navbar-header">
                                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                           <span class="icon-bar"></span>
                                 </button>
                          </div>
                     <div class="collapse navbar-collapse" id="myNavbar" style="background-color:white; ">
                            <ul class="nav navbar-nav">
                                  <li class="active"><a href="homepage.php" >Home</a></li>
                                  <li><a href="homepage.php" >About</a></li>
                             </ul>
                             <ul class="nav navbar-nav navbar-right">
                                       <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                               </ul>
                          </div>
                     </div>
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
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<h3 style="text-align: center; color: white; font: bold;">Login</h3>
				<form action="check.php" method="post">
						  <div class="form-group">
						    <label style="color: white;font: bold;">Email:</label>
						    <input type="text" class="form-control" id="email" name="email">
						  </div>
						  <div class="form-group">
						    <label style="color: white; font: bold;">Password:</label>
						    <input type="Password" class="form-control" id="pwd" name="pwd">
						  </div>			  
						  <button type="submit" class="btn btn-default">Login</button>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>