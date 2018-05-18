<?php
include_once ("Curso.php");
$curso = new Curso();

$cursos = $curso->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Cursos</h1>
    <br>
    <a class="btn btn-warning" href="formulario.php"><span class='glyphicon glyphicon-edit'></span> Inserir</a>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <thead>
            <th width="10%">Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </thead>

        <?php foreach ($cursos as $aCurso){
            echo "
            <tr>
                <td>
                    <a class='btn btn-primary' href='atualizar.php?id_curso={$aCurso['id_curso']}'><span class='glyphicon glyphicon-pencil'></span> Atualizar</a>
                </td>
                <td>{$aCurso['id_curso']}</td>
                <td>{$aCurso['nome']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';