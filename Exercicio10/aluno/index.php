<?php
include_once("Aluno.php");
$aluno = new Aluno();

$alunos = $aluno->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Alunos</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Aluno</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Matricula</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereco</td>
            <td>Nascimento</td>
            <td>Sexo</td>
            <td>ID Responsável</td>
            <td>ID Curso</td>
            <td>Nota</td>
        </tr>

        <?php foreach ($alunos as $aluno){
            echo "
            <tr>
                <td>
                        <a href='add.php?id_aluno={$aluno['id_aluno']}'>Alterar</a>
                        <a href='processamento.php?acao=excluir&id_aluno={$aluno['id_aluno']}'>Excluir</a>
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