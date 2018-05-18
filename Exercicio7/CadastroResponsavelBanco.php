<?php

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataNasci = $_POST['dataNasci'];
    $sexo = $_POST['sexo'];

    $sqlResponsavel =  "insert into responsavel(nome, telefone, endereco, data_nascimento, sexo)
values('$nome','$telefone','$endereco','$dataNasci','$sexo');";
    echo $sqlResponsavel;

?>