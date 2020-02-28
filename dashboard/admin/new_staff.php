<?php 
include 'connection.php';
if(isset($_POST['job'])){
    $job = $_POST['job'];
  }
$nm = $_POST['name'];
$job = $_POST['job'];
$idcard = $_POST['idcard'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$date = $_POST['date'];

$insert = "INSERT INTO staff (fname,idcard,phone,age,date,job) VALUES ('$nm', '$idcard', '$phone', '$age', '$date', '$job') ";
mysqli_query($con,$insert);

?>