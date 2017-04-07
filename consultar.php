<?php 

	$abrir_arquivo = fopen($_POST['file'] .".txt", "r");
	while (!feof ($abrir_arquivo)) {
		$linha = fgets($abrir_arquivo, 4096);
		echo $linha ."<br>";
	}
?>