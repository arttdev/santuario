<?php 
include 'connection.php';

   if(isset($_POST['habitation'])){
$habitation = $_POST['habitation'];
  }
$nm = $_POST['name'];
$habitation = $_POST['habitation'];
$trait = $_POST['trait'];
$price = $_POST['price'];
$flat = $_POST['flat'];

$insert = "INSERT INTO rooms (fname,trait,price,flat,habitation) VALUES ('$nm', '$trait', '$price', '$flat', '$habitation') ";
mysqli_query($con,$insert);

?>