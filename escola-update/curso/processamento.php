<?php
include_once ("Curso.php");

$curso = new Curso();

switch ($_GET['acao']){
    case 'salvar':
        // Método para inserir dados no banco
        $curso->inserir($_POST);
        break;
    case 'excluir':
        // Método para deletar dados no banco
        $curso->excluir($_GET['id_curso']);
        break;
    case 'alterar':
        // Método para atualizar dados no banco
        $curso->atualizar($_GET['id_curso'],$_POST);
        break;
}

// Redireciona para a página index
header('location: index.php');
?>