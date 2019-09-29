<?php
	include "Conexao.php";
	include 'Conexao.php';
	require_once 'Presidente.php';
	$presidente1 = new Presidente();
	$presidente2 = new Presidente();
	$presidente3 = new Presidente();

	$digP = $_POST['digP'];

	$sql = 'SELECT * FROM presidente WHERE 1 ';
	echo "$digP";
	$sql = "SELECT * FROM presidente";
	$resultado = mysqli_query($conexao,$sql);
	var_dump($resultado);
	//require_once 'index.php';
	
?>