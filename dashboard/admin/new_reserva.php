<?php 
include 'connection.php';
if(isset($_POST['tel'])){
    $contact = $_POST['tel'];
  }
$nm = $_POST['name'];
$tel = $_POST['contactperson'];
$day= $_POST['day'];
$room = $_POST['room'];
$date = $_POST['date'];


$insert = "INSERT INTO reserve (fname,tel,day,room,date) VALUES ('$nm', '$tel', '$day', '$room', '$date') ";
mysqli_query($con,$insert);

?>