<?php 
include 'dbconnect.php';
$uname = $_POST["name"];
$uemail = $_POST["email"];
$uphone = $_POST["phone"];
$umessage = $_POST["message"];

$sql  = "INSERT INTO booking(name,email,phone)  VALUES('$uname','$uemail','$uphone')";
$qry = mysqli_query($conn, $sql);

if($qry) {
    header('location:home-1.php');
  }
  else{
    echo"Operation Failed!!";
  }
  
?>