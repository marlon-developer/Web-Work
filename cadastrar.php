<?php  
    //Tratamento Caso Algum Campo esteja Vazio!
    if (empty($_POST['tx_nome'])) echo "O Campo Nao Pode Ser Vazio!<br>";
	if (empty($_POST['tx_descricao'])) echo "O Campo Nao Pode Ser Vazio!<br>";
	if (empty($_POST['tx_fabricante'])) echo "O Campo Nao Pode Ser Vazio!<br>";
    if (empty($_POST['rb_tipo'])) echo "Marque uma Opçao!<br>";
    if (empty($_POST['cb_crianca']) && empty($_POST['cb_adolescente']) && empty($_POST['cb_adulto'])) echo "Pelo Menos um Campo Deve Ser Selecionado!<br>";

    //Abertura do Arquivo
    $criar_arquivo = fopen("arquivos/". $_POST['tx_nome'] ."_". $_POST['tx_fabricante'] .".txt", "w");
    
    //Gravaçao das linhas do arquivo
    fwrite($criar_arquivo, $_POST['tx_nome'] ."\r\n");
    fwrite($criar_arquivo, $_POST['tx_descricao'] ."\r\n");
    fwrite($criar_arquivo, $_POST['tx_fabricante'] ."\r\n");
    if (!empty($_POST['rb_tipo'])) fwrite($criar_arquivo, $_POST['rb_tipo']."\r\n");
    if (!empty($_POST['cb_crianca'])) fwrite($criar_arquivo, $_POST['cb_crianca'] ."\r\n");
    if (!empty($_POST['cb_adolescente'])) fwrite($criar_arquivo, $_POST['cb_adolescente'] ."\r\n");
    if (!empty($_POST['cb_adulto'])) fwrite($criar_arquivo, $_POST['cb_adulto'] ."\r\n");

    //Fechando o Arquivo
    fclose($criar_arquivo);

    //Mensagem de Confirmaçao
    echo "Seus Dados Foram Salvos Com Sucesso!!!";
?>