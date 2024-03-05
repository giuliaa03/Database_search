<?php

$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$username = $_POST ["name"];
$password = $_POST ["email"];

$query = "INSERT INTO login(username, password) VALUES ('[value-1]','[value-2]')";

if(mysqli_query($conn, $query)){
    echo "Connected successfully";
    echo nl2br("\n Username: $username\n");

  } else{
    echo "ERROR: Could not able to execute $query. ";
  }

  $conn->close(); 
?>