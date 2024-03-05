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
		 <div>
	             
                <button class="button_main"><a href="mainn.php">Inapoi</a></button>
	              <button class="button_main"><a href="view.php">Afiseaza evenimente</a></button>
                <button class="button_main"><a href="search.php">Cauta un eveniment dupa data</a></button>
		  </div>

        <?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $sugestie = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["sugestie"])) {
    $sugestie = "";
  } else {
    $sugestie = test_input($_POST["sugestie"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="wrapper">


<h2>Sugerează un eveniment!</h2>
<p><span class="error">* câmp necesar</span></p>
<form method="post" action="add_suggestion.php">
  Nume complet: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value=" ">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Numele evenimentului: <input name="eventTitle" type="text">
  <br><br>
  Data evenimentului: <input type="date" name="eventDate">
  <br><br>
  Descrierea evenimentului: <br><br><textarea name="eventDescription" id="eventDescription" cols="40" rows="10"></textarea>
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
	</body>
</html>