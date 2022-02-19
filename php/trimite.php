<!--PHP-->
	<?php
		require_once("connect.php");
		if(isset($_POST['submit']))
		{		
			$nume = $_POST['nume'];
			$prenume = $_POST['prenume'];
			$cod = $_POST['cod'];
			$an = $_POST['an'];
			$disci = $_POST['btn'];
			$data = $_POST['data'];
			
			if ($disci == '0') $disci = "Info";
			else $disci = "Mate";

			$insert = mysqli_query($con,"INSERT INTO `studenti` (`Nume`, `Prenume`, `CodStudent`, `An`, `Disciplina`, `DataNasterii`) 
						VALUES ('$nume', '$prenume', '$cod', '$an', '$disci', '$data')");

			if(!$insert)
			{
				echo mysqli_error();
			}
			else
			{
				echo "Adăugat cu succes! Apasă <a href='../index.php'>aici</a>.";
			}
		}

		mysqli_close($con);
		
	?>
	