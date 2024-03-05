
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
	<head>

		<title>View</title>
		<style type="text/css">
			table{
				border-collapse: collapse;
				width: 99%;
				color: #004d66;
				font-family: monospace;
				font-size: 15px;
				text-align: center
			}
			th{
				background-color: #004d66;
				color: white;
				white-space: nowrap; 
  				width: 100px; 
  				border: 1.5 px solid #000000;
  				overflow: hidden;
  				text-overflow: ellipsis;
			}
			tr:nth-child(even) {
				background-color: #edf5f8;
			}
		</style>
        <link rel="stylesheet" href="style.css" />
		<script>
			function delEvent(eventId){
				document.getElementById(eventId).style.display = "none";
			}
		</script>
	</head>

	<body>

		 <div>
	             
	            <button><a href="mainn.php">Inapoi</a></button>
	            <button><a href="search.php">Cauta un eveniment dupa data</a></button>
				<button><a href="form.php">Sugerează un eveniment</a></button>
				<br> </br>

                <div class="form">
        <h1>Hey, <?php echo $_SESSION['username']; ?>!</h1>
        <p>You are now on admin dashboard page.</p>
        
    </div>
				<?php
					$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

					$sql = "SELECT * FROM `suggestions`";

					$result = mysqli_query($conn, $sql);


					echo "<table border='1'>
							<tr>
								<th>
									Username
								</th>
								<th>
									Email
								</th>
								<th>
									Titlu eveniment
								</th>
								<th>
									Data
								</th>
								<th>
									Descriere
								</th>
								<th>
									Actiuni
								</th>
							</tr>";

					while($row = mysqli_fetch_array($result)){
						$eventId = $row['id'];
						echo "<tr id='$eventId'>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td><a href='mailto:'>" . $row['email'] . "</a></td>";
						echo "<td>" . $row['titlu'] . "</td>";
						echo "<td>" . $row['data'] . "</td>";
						echo "<td>" . $row['descriere'] . "</td>";
						echo "<td>
								<form method='post' action='edit_suggestion.php'>
									<button style='all:revert;float:left;' type='submit'>Editeaza</button>
									<input type='hidden' name='event' id='event' value='$eventId'>
								</form>
								<form method='post' action='push_suggestion.php'>
									<button onclick='delEvent($eventId)' style='all:revert;float:left;margin-left:15px' type='submit'>Aproba</button>
									<input type='hidden' name='event' id='event' value='$eventId'>
								</form>
								<form method='post' action='del_suggestion.php'>
									<button onclick='delEvent($eventId)' style='all:revert' type='submit'>Sterge</button>
									<input type='hidden' name='event' id='event' value='$eventId'>
								</form>
							  </td>";
						echo "</tr>";
					}
					echo "</table>";
					mysqli_close($conn);
				?>
            <p><a href="logout.php">Logout</a></p>
		</div style="font-weight: bold">
	</body>
</html>
