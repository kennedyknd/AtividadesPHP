<?php
include_once ('../cabecalho.php');
include_once 'Curso.php';

$curso = new Curso();

if(!empty($_GET['id_curso'])){
    $curso->carregarPorId($_GET['id_curso']);
}

?>

    <h1 class="text-center">Cursos</h1>
    <br>
    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_curso" class="form-control" value="<?php echo $curso->getIdCurso();?>">

        <div class="row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?php echo $curso->getNome();?>" id="nome" name="nome" required>
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>