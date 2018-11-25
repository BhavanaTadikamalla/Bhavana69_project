<?php
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $pwd=$_POST["pwd"];
  $address=$_POST["address"];
  $panno=$_POST["panno"];
   $shopname=$_POST["shopname"];
  
  
  // Create connection
  $conn = mysqli_connect("localhost", "root", "", "freshoo");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "insert into retailer(email,firstname, lastname, pwd, panno,address,shop_name) values ('$email','$firstname','$lastname','$pwd','$panno','$address','$shopname')";
  if (mysqli_query($conn, $sql))
  {
      echo "<script>alert('Registration Successful');</script>";
      header("refresh:1; url=login.php");
  }
  else
  {
    echo "<script>alert('Registration Failed');</script>";
  } 

  $conn->close();
?>