<?php
    $produto = 'Notebook-Gamer G-15 Dell';
    $preco = 7500.00;
    $quantidade = 2;

    //$resultado = $quantidade * $preco; //Estudei por fora, essa parte 
    //$mensagem = "Você comprou $quantidade unidades de $produto , por um preço total de $resultado";
    $total = $preco * $quantidade;

    $mensagem = "Você comprou $quantidade unidades de $produto , por um preço total de $total";

    echo $mensagem;


?>