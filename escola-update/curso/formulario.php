<?php
include_once ('../cabecalho.php');
?>
    <h1 class="text-center">Cursos</h1>
    <br>
    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-edit'></span> Inserir</button>
                <a class="btn btn-warning" href="index.php"><span class='glyphicon glyphicon-arrow-left'></span> Voltar</a>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>