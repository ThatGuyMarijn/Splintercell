<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>Rekenwebsite - De Splinter</title>
</head>

<body>
	<?php
		session_start();
		require("./Configuratie.php");
		require("./Modules/Functies.php");
	?>
	<div id="MainNav">
		<nav>
			<?php 
				// TODO: Menu idee van Cinema7 gebruiken?
				// heb al een deel van de code gemaakt voor als we het zo willen doen
				require("./Modules/Menu.php");
				$paginaNr = $_GET["paginaNr"] ?? 0;

				$pdo = ConnectDB();
			?>
		</nav>
	</div>
	<div id="Main">
		<main>
			<?php
				switch($paginaNr)
				{
					case 0:
						require("./Modules/Inloggen.php");
						break;
					case 1:
						require("./Modules/Uitloggen.php");
						break;
					case 2:
						require("./Modules/Registreren.php");
						break;
					case 90:
						require("./Modules/AdminOverzicht.php");
						break;
				}
			?>
		</main>
	</div>
</body>
</html>