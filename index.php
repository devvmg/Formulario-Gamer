<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="logoAss.png">
        <link rel="shortcut icon" href="logoAss.png" type="image/icon"/>

		<title>Piri Games</title>
	</head>
	<body>
		<?php 
			//configuração do banco de dados
			include("config.php");
			//configuração das páginas
			switch (@$_REQUEST["page"])
			{
				case "salvar-cad":
					include("salvar-cad.php");
					break;
				case "listar-cad":
					include("listar-cad.php");
					break;
				default:
					include("forms.php");
			}	
		?>
	</body>
</html>
