<?php

$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name = $_POST ["name"];
$email = $_POST ["email"];
$eventTitle = $_POST ["eventTitle"];
$eventDate = $_POST ["eventDate"];
$eventDescription = $_POST ["eventDescription"];

$query = "INSERT INTO `suggestions`(`name`, `email`, `titlu`, `data`, `descriere`) VALUES ('$name','$email','$eventTitle','$eventDate','$eventDescription')";

if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
    header('location:mainn.php');
  } else{
    echo "ERROR: Could not able to execute $query. ";
  }

  $conn->close(); 
?>
