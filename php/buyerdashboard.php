<?php
session_start();
if(!isset($_SESSION['email']))
{
header('location:homepage.php');
}

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
  	<style type="text/css">
  		.result_container>.row>div:nth-child(2)>.result>ul>li
  		{
  			margin-top: 2%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>span
  		{
  			margin-left: 5%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>button
  		{
  			float: right;
  			background-color: #5c85d6;
  		}
  	</style>
  	<script type="text/javascript">
  		
		var sellers_from_server="";
		var unorderedlist="";
		var fruittable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
		var buyer_email;
  		$(document).ready(function(){
  			buyer_email=$("#useremail_id").text().trim();
			sellersInformation();
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		   //console.log("hai");
		    	  $("ul").remove();
		    	  $.post("get_fruit_information.php",
				     {"email":sellers_from_server[$(this).attr("name")].semail},
				    function(data,status){
				     	if(data!="[0]")
				     	{
				    	console.log(data);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawTable(sellers_fruits_from_server);
				     }
				     }
		    	);

		    });
  		});
  		function sellersInformation()
  		{
  			$("table").remove();
  			$("ul").remove();

  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	if (data!="[0]") {
				    	//console.log(data);
				    	sellers_from_server=JSON.parse(data);
				    	drawList(sellers_from_server);
				    }
				    }
		    );
  		}
  		function drawList(sellers)
  		{
  			unorderedlist = $("<ul class='list-group'/>");
  			$("#result").append(unorderedlist);
  			for(var i=0;i<sellers.length;i++)
  			{
  				drawListItem(sellers[i],i);
  			}
  		}
  		function drawListItem(seller,index)
  		{
  			unorderedlist.append($("<li class='list-group-item'><span>"+seller.sname+"</span><span>"+seller.semail+"</span><span>"+seller.shopname+"</span><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button></li>"));
  		}
  		function drawTable(fruits){
			//console.log(fruits.length);
			fruittable= $("<table class='table table-striped'/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td>FruitName</td>");
			colrow.append("<td>Qunatity</td>");
			colrow.append("<td>Price</td>");
			fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruittable.append(tbody);
			    tbody.append(row); 
			    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}       
  	</script>
</head>
<body background="../img/dashb1.jpg">
	<a href="homepage.php?logout='1'">Logout</a>
	<h3 id="useremail_id"><?php echo $_SESSION['email'];?></h3>
	<div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" onclick="sellersInformation()">DashBoard Home</button>
				<div class="result" id="result">
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
</body>
</html>