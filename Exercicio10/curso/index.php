<?php
include_once ("Curso.php");
$curso = new Curso();

$cursos = $curso->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Cursos</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Curso</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
        </tr>


        <?php foreach ($cursos as $curso){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_curso={$curso['id_curso']}'>Alterar</a>
                    <a href='processamento.php?acao=excluir&id_curso={$curso['id_curso']}'>Excluir</a>
                </td>
                <td>{$curso['id_curso']}</td>
                <td>{$curso['nome']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';