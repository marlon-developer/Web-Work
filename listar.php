<?php  
	/*$files = glob("*.txt", GLOB_BRACE);
	foreach ($files as $file);
	$abrir_arquivo = fopen($file, "r");
	while (!feof ($abrir_arquivo)) {
		$linha = fgets($abrir_arquivo, 4096);
		echo $linha ."<br>";
	}*/


	$abrir_arquivo = fopen("kkk_kkk.txt", "r");
	while (!feof ($abrir_arquivo)) {
		$linha = fgets($abrir_arquivo, 4096);
		echo $linha ."<br>";
	}

?>












