<?php

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataNasci = $_POST['dataNasci'];
    $sexo = $_POST['sexo'];
    $id_responsavel = $_POST['id_responsavel'];
    $id_curso = $_POST['id_curso'];
    $nota = $_POST['nota'];

    $sqlAluno =  "insert into aluno(matricula, nome, telefone, endereco, data_nascimento, sexo, id_responsavel, id_curso, nota)
values('$matricula','$nome','$telefone','$endereco','$dataNasci','$sexo','$id_responsavel','$id_curso','$nota');";
    echo $sqlAluno;

?>