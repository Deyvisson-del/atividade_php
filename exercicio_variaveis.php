<?php
    $nome = $_REQUEST['nome'];
    $idade =$_REQUEST['idade'];
    $cidade =$_REQUEST['cidade'];

    $mensagem = "Nome: $nome , tenho $idade anos e moro em $cidade.";
    echo $mensagem;