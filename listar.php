<?php 
	//Listar Arquivos do Diretorio Arquivos
	$pasta = "arquivos";
	$listar = new RecursiveDirectoryIterator($pasta);
	$recursivo = new RecursiveIteratorIterator($listar);

	//Printando o nome dos Arquivos existentes na pasta
	foreach ($recursivo as $value) $arquivo[] = $value -> getFilename();
	for ($i = 3; $i < count($arquivo); $i++) echo $arquivo[$i] ."<br>";
?>












