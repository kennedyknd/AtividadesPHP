<?php
include_once ('Curso.php');
include_once ('../cabecalho.php');

$curso = new Curso();

$id_curso = $_GET['id_curso'];

$cursos = $curso->recuperarDadosId($id_curso);

?>
    <h1 class="text-center">Atualizar Cursos - ID <?= $id_curso?></h1>
    <br>
    <form class="form-horizontal" method="post" action="processamento.php?acao=alterar&id_curso=<?= $id_curso?>">
        <h3></h3>
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $cursos['nome'];?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-pencil'></span> Atualizar</button>
                <a class='btn btn-danger' href='processamento.php?acao=excluir&id_curso=<?= $id_curso?>'><span class='glyphicon glyphicon-trash'></span> Excluir</a>
                <a class="btn btn-warning" href="index.php"><span class='glyphicon glyphicon-arrow-left'></span> Voltar</a>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>