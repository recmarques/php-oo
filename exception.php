<?php

// throw new Exception("Essa é uma exceção");

// não é executado, código é encerrado na exceção
// echo "\n ... executando ... \n";

function validarUsuario(array $usuario){

    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        // return false;
        throw new Exception("Campos obrigatórios não foram preenchidos");
    }

    return true;
}

$usuario = [
    'codigo'=> 1,
    'nome' => '',
    'idade' => 57,
];

$status = false;
// tentativa de validar o usuário
// se retornar uma exceção, ela é capturada no catch
// caso contrário o código é executado normalmente
try{
    $status = validarUsuario($usuario);
} catch(Exception $e){
    echo $e->getMessage();
} finally {
    echo "Status de operação: " . (int)$status;
    die();
}

// se o que ocorre dentro do try catch não gera exceção
// finally é executado diretamente

// caso haja uma exception, é executado o catch e
// o finally

// $usuarioValidado = validarUsuario($usuario);

// if(!$usuarioValidado){
//     echo "Usuário Inválido!";
//     return false;
// }
// else{
//     echo "Usuário Válido!";
//     return true;
// }

echo "\n ... teste ... \n";