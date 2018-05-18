<?php
include_once('Responsavel.php');

$responsavel = new Responsavel();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_responsavel'])) {
            $responsavel->alterar($_POST);
        } else {
            $responsavel->inserir($_POST);
        }
        break;
    case 'excluir':
        $responsavel->excluir($_GET['id_responsavel']);
        break;
}

header('location: index.php');
?>