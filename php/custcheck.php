

<?php
session_start();

   $username=$_POST["email"];
   $password=$_POST["pwd"];

   $con = mysqli_connect("localhost", "root", "", "freshoo");

 if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  } 
$sql = "SELECT email from customer where  email = '$username'  and  pwd = '$password'  " ;
$result = mysqli_query($con, $sql);
if ($result) 
{
  # code...
  $_SESSION['email']=$username;
  echo "login success";
       //echo "<h1>This is fine</h1>";
       header("Location:buyerdashboard.php");
}
else
{
  echo "failed";
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