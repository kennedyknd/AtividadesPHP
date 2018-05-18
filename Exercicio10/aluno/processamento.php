<?php
include_once("Aluno.php");

$aluno = new Aluno();

// Método para inserir dados no banco
$aluno->inserir($_POST);

// Redireciona para a página index
header('location: index.php');
?>