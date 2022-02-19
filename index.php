<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="description" content="Formular Form">
		<meta name="keywords" content="Form, Formular, ABC">
		<meta name="author" content="Gaspar Nicolae">

		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">

		<title>Formular</title>
	</head>
	<body>

	<!-- Home Page --> 
    <div class="home">
		<!--Navbar-->
		<div class="nav">
        <div>Formular Introducere Date</div>
		</div>
		
		<!--Form-->
		<div class="text-container">
			<div>
				<h1>Formular Date Studenți</h1>
		  
				<form action="php/trimite.php" method="post">
					<li><label for="nume">Nume:</label>
						<input type="text" name="nume" placeholder="Nume" required></li>
					<li><label for="prenume">Prenume:</label>
						<input type="text" name="prenume" placeholder="Prenume" required></li>
					<li><label for="cod">Cod Student:</label>
						<input type="number" name="cod" placeholder="Cod" required></li>
					<li><label for="an">An:</label>
						<input type="number" name="an" placeholder="An" min="1" max="5" required></li>
					<li>Disciplină:
						<input type="radio" id="info" name="btn" value="0" required>Info
						<input type="radio" id="mate" name="btn" value="1" required>Mate
					<li><label for="data">Data Nașterii:</label>
						<input type="date" name="data" placeholder="Data" required></li><br>
					<input type="submit" name="submit" value="Trimite" class="btntr">
				</form>

			</div>
		</div>
	</div>

	</body>
</html>