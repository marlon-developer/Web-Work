<?php  
    //Listar Arquivos do Diretorio Arquivos
    $pasta = "arquivos";
    $listar = new RecursiveDirectoryIterator($pasta);
    $recursivo = new RecursiveIteratorIterator($listar);

    //Printando o nome dos Arquivos existentes na pasta
    foreach ($recursivo as $value) $arquivo[] = $value -> getFilename();
    for ($i = 3; $i < count($arquivo); $i++) {
?>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <p><h4><strong>
        <table border="1" align="center" width="500px">
            <tr>
                <td>
                    <?php echo $arquivo[$i];
                        $op = fopen($value, "r");
                        while (!feof($op)) {
                            $linha = fgets($op, 4096);
                            echo "<br>". $linha; 
                    }?>
                </td>
                <td>
                    <a href="editar.html" class="btn btn-default">Editar</a><br>
                </td>
            </tr>
        </table>
        </strong></h4></p>
            </body>
        </html>
<?php
    }
?>

<html>
<body>
    <p align="center"><a href="cadastrar.php">Cadastrar</a></p>
    <p align="center"><a href="editar.html">Editar</a></p>
    <p align="center"><a href="listar_completo.php">Listar com Dados</a></p>
</body>
</html>









