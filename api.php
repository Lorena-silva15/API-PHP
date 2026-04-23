<?php

    header("Content-Type:application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo "Método da Requisição : ".$metodo;

    //Conteúdo
        // $usuarios=[

        //     ["id"=>1 , "nome"=>"margot", "email"=>"seila@gmail.com"],
        //     ["id"=>2 , "nome"=>"margarete", "email"=>"seila2@gmail.com"]

        // ];

    $arquivo='usuarios.json';

    if (!file_exists($arquivo)) {
        file_put_contents($arquivo,json_encode([],JSON_PRETTY_PRINT | JSON_UNESCAPE_UNICODE));
        
    }

    $usuarios= json_decode(file_get_contents($arquivo),true);

    switch ($metodo) {
        case 'GET':
            //echo "AQUI AÇÕES DO MÉTODO GET";
             echo json_encode($usuarios);
            break;

        case 'POST':
            //echo "AQUI AÇÕES DO MÉTODO POST";
            $dados=json_decode(file_get_contents('php://input'),true);
           // print_r($dados);
            $novousuario=[
                "id"=> $dados['id'],
                "nome"=> $dados['nome'],
                "email"=> $dados['email']
           ];
           array_push($usuarios,$novousuario);
           echo json_encode('Usuário inserido');
           print_r($usuarios);

            break;
        default:
            echo "MÉTODO NÃO ENCONTRADO";
            break;
    }

    // ADICIONA AO ARRAY DE USUÁRIOS
            $usuarios[] = $novo_usuario;


        
            file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        
            // RETORNA MENSAGEM DE SUCESSO
        
            echo json_encode(["mensagem" => "Usuário inserido com sucesso!", "usuarios" => $usuarios], JSON_UNESCAPED_UNICODE);
            break;

            //ADICIONA O NOVO USUARIO AO ARRAY EXISTENTE
             array_push ($usuarios, $novo_usuario);
             echo json_encode('Usuário inserido com sucesso!', JSON_UNESCAPED_UNICODE);
             print_r($usuarios);
            break;
           
         default:
            // echo "MÉTODO NÃO ENCONTRADO!";
            // break;
            http_response_code (405); // Método não permitido
            echo json_encode(["erro" => "Método não permitido!"], JSON_UNESCAPED_UNICODE);
            break;
   

   

?>