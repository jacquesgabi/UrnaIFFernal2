<?php
	include 'Conexao.php';
	require_once 'Presidente.php';
	$presidente1 = new Presidente();
	$presidente2 = new Presidente();
	$presidente3 = new Presidente();

	$digP = $_POST['digP'];

	$sql = "SELECT numPresidente, nome, partido FROM presidente WHERE numPresidente = $digP";
	$resultado = mysqli_query($conexao,$sql);
	while ($linha = mysqli_fetch_array($resultado)){
			$numPresidente = $linha['numPresidente'];
			$nome = $linha['nome'];
			$partido = $linha['partido'];
			echo "$numPresidente - ";
			echo "$nome  - ";
			echo "$partido <br>";
	}

	//require_once 'index.php';

?>
