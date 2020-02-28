<?php 
include 'connection.php';
if(isset($_POST['tel'])){
    $contact = $_POST['tel'];
  }
$nm = $_POST['name'];
$tel  = $_POST['contactperson'];
$idcard = $_POST['idcard'];
$proof = $_POST['proof'];
$origin = $_POST['origin']; 
$fate = $_POST['fate'];
$pro = $_POST['pro'];
$country = $_POST['country'];
$age = $_POST['age'];
$birthdate = $_POST['birthdate'];
$sex = $_POST['sex'];
$date = $_POST['date'];


$insert = "INSERT INTO clerk (fname,idcard,proof,origin,fate,pro,country,age,birthdate,sex,date,tel) VALUES ('$nm', '$idcard', '$proof', '$origin', '$fate', '$pro', '$country','$age', '$birthdate', '$sex', '$date', '$tel') ";
mysqli_query($con,$insert);

?>