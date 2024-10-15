<?php
// 1. Faça um programa que irá receber o nome e valor de um produto qualquer. E
// informar se ele é “importado” ou ”nacional”. Caso o produto seja “importado” seu
// preço deverá ser multiplicado por 2.17;


    $nome = $_REQUEST ["nome"];
    $preco = $_REQUEST ["preco"];
    $escolha = $_REQUEST ["escolha"];

        switch ($escolha) {
            case "Importado":
                $preco = $preco * 2.17;
                break;
            case "Nacional":
                
                $preco = $preco *0;
                break;
            }

echo "Nome do produto: $nome , Preço do produto R$ $preco , Origem do produto: $escolha";
            
?>