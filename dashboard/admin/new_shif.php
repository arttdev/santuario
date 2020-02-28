<?php 
include 'connection.php';
if(isset($_POST['room'])){
    $room = $_POST['room'];
  }
$nm = $_POST['name'];
$room = $_POST['room'];
$mecato = $_POST['mecato'];
$firm = $_POST['firm'];
$date = $_POST['date'];

$insert = "INSERT INTO turn (fname,mecato,firm,date,room) VALUES ('$nm', '$mecato', '$firm', '$date', '$room') ";
mysqli_query($con,$insert);

?>