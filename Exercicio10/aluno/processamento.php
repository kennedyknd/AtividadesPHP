<?php
include_once("Aluno.php");

$aluno = new Aluno();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_aluno'])) {
            $aluno->alterar($_POST);
        } else {
            $aluno->inserir($_POST);
        }
        break;
    case 'excluir':
        $aluno->excluir($_GET['id_aluno']);
        break;
}

// Redireciona para a página index
header('location: index.php');
?>