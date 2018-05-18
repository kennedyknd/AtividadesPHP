<?php
include_once("Aluno.php");
$aluno = new Aluno();

$alunos = $aluno->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Alunos</h1>
    <br>
    <a class="btn btn-warning" href="formulario.php"><span class='glyphicon glyphicon-edit'></span> Inserir</a>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <thead>
            <th width="10%">Ações</th>
            <th>ID aluno</th>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de nascimento</th>
            <th>Sexo</th>
            <th>ID responsavel</th>
            <th>ID curso</th>
            <th>Nota</th>
        </thead>

        <?php foreach ($alunos as $aluno) {
            echo "
            <tr>
                <td>
                    <a class='btn btn-primary' href='atualizar.php?id_aluno={$aluno['id_aluno']}'><span class='glyphicon glyphicon-pencil'></span> Atualizar</a>
                </td>
                <td>{$aluno['id_aluno']}</td>
                <td>{$aluno['matricula']}</td>
                <td>{$aluno['nome']}</td>
                <td>{$aluno['telefone']}</td>
                <td>{$aluno['endereco']}</td>
                <td>{$aluno['data_nascimento']}</td>
                <td>{$aluno['sexo']}</td>
                <td>{$aluno['id_responsavel']}</td>
                <td>{$aluno['id_curso']}</td>
                <td>{$aluno['nota']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';