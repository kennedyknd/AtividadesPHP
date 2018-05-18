<?php
include_once("Responsavel.php");

$responsavel = new Responsavel();

switch ($_GET['acao']) {
    case 'salvar':
        // Método para inserir dados no banco
        $responsavel->inserir($_POST);
        break;
    case 'excluir':
        // Método para deletar dados no banco
        $responsavel->excluir($_GET['id_responsavel']);
        break;
    case 'alterar':
        // Método para atualizar dados no banco
        $responsavel->atualizar($_GET['id_responsavel'], $_POST);
        break;
}

// Redireciona para a página index
header('location: index.php');
?>
