<?php

require 'Produto.php';

$produto = new Produto();
$produto->list();

switch($_GET['operacao']){

    case 'list';
        // $produto->list();
        echo '<h3>Produtos: </h3>';
        
        foreach($produto->list() as $key => $value){
            echo 'ID: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr><br>';
        }

    break;

    case 'insert';

        $status= = $produto->insert('Produto teste');

        if(!$status){
            echo "Não foi possível executar a operação!";
            return false;
            // finaliza a execução
        }
            echo "Registro inserido com sucesso!";
        

    break;

    case 'update';

        $status = $produto->update('Produto alterado teste', 1);

        if(!$status){
            echo "Não foi possível executar a operação!";
            return false;
            // finaliza a execução
        }
            echo "Registro atualizado com sucesso!";
        

    break;

    case 'delete';

        $status = $produto->delete(3);

        if(!$status){
            echo "Não foi possível executar a operação!";
            return false;
            // finaliza a execução
        }
            echo "Registro removido com sucesso!";

    break;

    // default:

    //     break;
}