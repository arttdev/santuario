<?php 
include 'connection.php';
if(isset($_POST['fad'])){
    $fad = $_POST['fad'];
  }
$nm = $_POST['name'];
$fad = $_POST['fad'];
$date = $_POST['date'];

$insert = "INSERT INTO news (fname,date,fad) VALUES ('$nm', '$date', '$fad') ";
mysqli_query($con,$insert);

?>