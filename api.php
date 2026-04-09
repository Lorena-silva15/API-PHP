<?php

    header("Content-Type:application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo "Método da Requisição : ".$metodo;


    switch ($metodo) {
        case 'GET':
            echo "AQUI AÇÕES DO MÉTODO GET";
            break;

        case 'POST':
            echo "AQUI AÇÕES DO MÉTODO POST";
            break;
        default:
            echo "MÉTODO NÃO ENCONTRADO";
            break;
    }


















    // $usuarios=[

    //     ["id"=>1 , "nome"=>"margot", "email"=>"seila@gmail.com"],
    //     ["id"=>2 , "nome"=>"margarete", "email"=>"seila2@gmail.com"]

    // ];

    // echo json_encode($usuarios);

?>