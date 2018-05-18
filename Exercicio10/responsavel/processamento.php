<?php
include_once('Responsavel.php');

$responsavel = new Responsavel();

$responsavel->inserir($_POST);

header('location: index.php');
?>