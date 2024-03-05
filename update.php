<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$eventId = $_POST['event'];

$username = $_POST['name'];
$email = $_POST['email'];
$eventTitle = $_POST['eventTitle'];
$eventDate = $_POST['eventDate'];
$eventDescription = $_POST['eventDescription'];

$query = "UPDATE `suggestions` SET `name`='$username',`email`='$email',`titlu`='$eventTitle',`data`='$eventDate',`descriere`='$eventDescription' WHERE id='$eventId'";

if(mysqli_query($conn, $query)){
    echo "Event updated succesfully.";
    header('location: dashboard.php');
  } else{
    echo "ERROR: Could not able to execute $query. ";
  }

  $conn->close(); 
?>