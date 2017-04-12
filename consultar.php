<?php 

	$pasta = "arquivos";
	$listar = new RecursiveDirectoryIterator($pasta);
	$recursivo = new RecursiveIteratorIterator($listar);

	//$nome = $_POST['tx_nome'];

	foreach ($recursivo as $value) $arquivo[] = $value -> getFilename();
	for ($i = 3; $i < count($arquivo); $i++) {
		//echo $arquivo[$i] ."<br>";
		if ($_POST['tx_nome'] ."txt" == $arquivo[$i]) {
			echo "Acertou";
			/*$abrir_arquivo = fopen($_POST['tx_nome'] .".txt", "r");
			while (!feof ($abrir_arquivo)) {
				$linha = fgets($abrir_arquivo, 4096);
				echo $linha ."<br>";
			}*/
		}
	}
?>