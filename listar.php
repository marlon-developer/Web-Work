<?php  
	/*$files = glob("*.txt", GLOB_BRACE);
	foreach ($files as $file);
	$abrir_arquivo = fopen($file, "r");
	while (!feof ($abrir_arquivo)) {
		$linha = fgets($abrir_arquivo, 4096);
		echo $linha ."<br>";
	}*/


	/*$abrir_arquivo = fopen("*.txt", "r");
	while (!feof ($abrir_arquivo)) {
		$linha = fgets($abrir_arquivo, 4096);
		echo $linha ."<br>";
	}*/

	//Listar Arquivos do Diretorio Arquivos
	$pasta = "arquivos";
	$listar = new RecursiveDirectoryIterator($pasta);
	$recursivo = new RecursiveIteratorIterator($listar);

	//Printando o nome dos Arquivos existentes na pasta
	foreach ($recursivo as $objeto) echo $objeto -> getFilename()."<br>";
	
	
?>












