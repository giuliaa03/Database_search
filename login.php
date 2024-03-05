<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
    <link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		 <div>
	             
                <button><a href="mainn.php">Inapoi</a></button>
	              <button><a href="view.php">Afiseaza evenimente</a></button>
                <button><a href="search.php">Cauta un eveniment dupa data</a></button>
		  </div>
<?php
    $con = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        // Check user is exist in the database
        $query    = "SELECT * FROM `login` WHERE username='$username'
                     AND password='" . $password . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" style="text-align: center; margin-top: 170px" method="post" name="login">
        <h2 class="login-title">Login as administrator</h2>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Creati un cont</a></p>
  </form>
<?php
    }
    $con->close();
?>
	</body>
</html>