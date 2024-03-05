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
				background-color: #ffffe6;
			}
		</style>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		 <div>
	             
	            <button class="button_main"><a href="mainn.php">Inapoi</a></button>
	            <button class="button_main"><a href="search.php">Cauta un eveniment dupa data</a></button>
				<button class="button_main"><a href="form.php">Sugerează un eveniment</a></button>

				<h1> Evenimente semnificative ale Colegiului Național Mihai Eminescu</h1>
				<br> </br>
				<?php
					$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

					$sql = "SELECT `numeleEvenimentului`, `dataEveniment`, `descriereEveniment` FROM `evenimente`";

					$result = mysqli_query($conn, $sql);


					echo "<table border='1'>
							<tr>
								<th>
									Nume Eveniment
								</th>
								<th>
									Data eveniment
								</th>
								<th>
									Descriere Eveniment
								</th>
							</tr>";

					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>" . $row['numeleEvenimentului'] . "</td>";
						echo "<td>" . $row['dataEveniment'] . "</td>";
						echo "<td>" . $row['descriereEveniment'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";

					mysqli_close($conn);
				?>

		</div>

	</body>
</html>