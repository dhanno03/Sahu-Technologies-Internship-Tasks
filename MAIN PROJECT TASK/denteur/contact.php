<?php 
include 'dbconnect.php';
$uname = $_POST["name"];
$uemail = $_POST["email"];
$uphone = $_POST["phone"];
$umessage = $_POST["message"];

$sql  = "INSERT INTO contact(name,email,phone,message)  VALUES('$uname','$uemail','$uphone','$umessage')";
$qry = mysqli_query($conn, $sql);

if($qry) {
    header('location:contact-us-1.php');
  }
  else{
    echo"Operation Failed!!";
  }
  
?>