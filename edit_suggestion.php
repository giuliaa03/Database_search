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

$username = $row['name'];
$email = $row['email'];
$eventTitle = $row['titlu'];
$eventDate = $row['data'];
$eventDescription = $row['descriere'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
        <style>
        .error {color: #FF0000;}
        </style>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>

    <div class="wrapper">
        <h2>Editeaza evenimentul!</h2>
        <form method="post" action="update.php">
        Nume complet: <input type="text" name="name" value='<?php echo $username ?>'>
        <br><br>
        E-mail: <input type="text" name="email" value='<?php echo $email ?>'>
        <br><br>
        Numele evenimentului: <input name="eventTitle" type="text" value='<?php echo $eventTitle ?>'>
        <br><br>
        Data evenimentului: <input type="date" name="eventDate" value='<?php echo $eventDate ?>'>
        <br><br>
        Descrierea evenimentului: <br><br><textarea name="eventDescription" id="eventDescription" cols="40" rows="10"><?php echo $eventDescription ?></textarea>
        <br>
        <br>
        <input type="submit" name="edit" value="Edit">  
        <input type="hidden" name='event' value='<?php echo $eventId ?>'>
        </form>
        </div>
	</body>
</html>