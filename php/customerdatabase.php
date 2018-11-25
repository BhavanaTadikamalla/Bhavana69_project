<?php
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $pwd=$_POST["pwd"];
  $address=$_POST["address"];
  $panno=$_POST["panno"];
  $phnno=$_POST["phone"];
  
  // Create connection
  $conn = mysqli_connect("localhost", "root", "", "freshoo");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "insert into customer(email,firstname, lastname, pwd, panno,address,phnno) values ('$email','$firstname','$lastname','$pwd','$panno','$address',$phnno)";
  if (mysqli_query($conn, $sql))
  {
      echo "<script>alert('Registration Successful');</script>";
      header("refresh:1; url=../php/cust_login.php");
  }
  else
  {
    echo "<script>alert('Registration Failed');</script>";
  } 

  $conn->close();
?>