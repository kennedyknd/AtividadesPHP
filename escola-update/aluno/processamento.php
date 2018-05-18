<?php
include_once("Aluno.php");

$aluno = new Aluno();

switch ($_GET['acao']){
    case 'salvar':
        // Método para inserir dados no banco
        $aluno->inserir($_POST);
        break;
    case 'excluir':
        // Método para deletar dados no banco
        $aluno->excluir($_GET['id_aluno']);
        break;
    case 'alterar':
        // Método para atualizar dados no banco
        $aluno->atualizar($_GET['id_aluno'],$_POST);
        break;
}

// Redireciona para a página index
header('location: index.php');
?>