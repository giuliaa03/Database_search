<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$eventId = $_POST['event'];
$query = "DELETE FROM `suggestions` WHERE id= '$eventId'";
if(mysqli_query($conn, $query)){
    echo "Record with id " . $eventId . " deleted successfully.\n";
    header('location: dashboard.php');
  } else{
    echo "ERROR: Could not able to execute $query. ";
  }
  $conn->close(); 
?>
