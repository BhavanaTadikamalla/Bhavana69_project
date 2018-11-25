<?php
session_start();
   $username=$_POST["email"];
   $password=$_POST["pwd"];

   $con = mysqli_connect("localhost", "root", "", "freshoo");

 if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  } 
$sql = "SELECT email FROM retailer where  email = '$username'  and  pwd = '$password' ";
$result = mysqli_query($con, $sql); 
if($result)
 {
  # code...
  echo "login success";
  // setcookie("test",$_POST['email'], time() + (86400 * 30));
  // setcookie("test2",$_POST['pwd'], time() + (86400 * 30));
$_SESSION['email']= $username;
 // echo "name:".$_COOKIE['test'];
  //echo "password:".$_COOKIE['test2'];
  header("Location:jsontoquery.php");
}
else
{
  echo "login failed";
}

/*if ($result) {
  # code...
   
       //echo "<h1>This is fine</h1>";
       
}
   /*if(($username=="ram")&&($password=="1234"))
   {
       setcookie("test","x", time() + (86400 * 30), "/");
       setcookie("test2","x2", time() + (86400 * 30), "/");
       //echo "<h1>This is fine</h1>";
       header("Location:index.php");
   }
   else
   {
   	     header("Location:login.html");
   }*/
?>