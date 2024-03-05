<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$eventId = $_POST['event'];

$query = "SELECT * FROM suggestions WHERE id= '$eventId'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$eventTitle = $row['titlu'];
$eventDate = $row['data'];
$eventDescription = $row['descriere'];


$query = "INSERT INTO `evenimente`(`numeleEvenimentului`, `dataEveniment`, `descriereEveniment`) VALUES ('$eventTitle','$eventDate','$eventDescription')";
if(mysqli_query($conn, $query)){
    echo "Event approved succesfully.";
    include 'del_suggestion.php';
  } else{
    echo "ERROR: Could not able to execute $query. ";
  }

  $conn->close(); 
?>
