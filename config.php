<?php
//CONEXÃO COM POSTGRES
	
	$endereco = 'localhost';
	$banco = 'Portfolio';
	$usuario = 'postgres';
	$senha = 'postgres';
	//phpinfo();

	try
	{
		$pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco" , $usuario , $senha , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		echo ".";
	} catch (PDOException $e)
	{
		echo "Falha ao conectar ";
		die($e->getMessage());
	} 
?>