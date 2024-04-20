<?php
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco_de_dados = 'tarefas';

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);
	
	mysqli_set_charset($conexao, "utf8");
?>
