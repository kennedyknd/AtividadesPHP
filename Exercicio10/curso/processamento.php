<?php
include_once ("Curso.php");

$curso = new Curso();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_curso'])) {
            $curso->alterar($_POST);
        } else {
            $curso->inserir($_POST);
        }
        break;
    case 'excluir':
        $curso->excluir($_GET['id_curso']);
        break;
}

// Redireciona para a página index

header('location: index.php');
