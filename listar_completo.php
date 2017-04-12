<?php 
    //Listar Arquivos do Diretorio Arquivos
    $pasta = "arquivos";
    $listar = new RecursiveDirectoryIterator($pasta);
    $recursivo = new RecursiveIteratorIterator($listar);

    //Printando o nome dos Arquivos existentes na pasta
    foreach ($recursivo as $value) $arquivo[] = $value -> getFilename();
    for ($i = 3; $i < count($arquivo); $i++) {
        echo $arquivo[$i] ."<br>";
        $op = fopen($value, "r");
        while (!feof($op)) {
            $linha = fgets($op, 4096);
            echo $linha ."<br>";
        }
    }
?>

<html>
<body>
    <p><a href="cadastrar.php">Cadastrar</a></p>
    <p><a href="editar.html">Editar</a></p>
    <p><a href="listar.php">Listar Produtos</a></p>
</body>
</html>












