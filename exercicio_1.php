<?php
    $nome = $_REQUEST ['nome'];
    $valor = $_REQUEST ['valor'];
    $escolha = $_REQUEST['escolha'];

    if ($escolha == 'Importado'){
        
        $resultado= $valor * 2.17;
        echo "Você comprou o produto $nome o valor a pagar é R$ $resultado ";
    
    } elseif($escolha == 'Nacional'){

        echo "O valor total R$ $valor";
    
    }else{

        echo "Erro: ! Selecione a origem do valor !";
    
    }


?>