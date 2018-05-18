<?php
include_once ('Responsavel.php');
include_once ('../cabecalho.php');

$responsavel = new Responsavel();

$id_responsavel = $_GET['id_responsavel'];

$responsaveis = $responsavel->recuperarDadosId($id_responsavel);

?>
    <h1 class="text-center">Atualizar Responsável - ID <?= $id_responsavel?></h1>
    <br>
    <form class="form-horizontal" method="post" action="processamento.php?acao=alterar&id_responsavel=<?= $id_responsavel?>">
        <h3></h3>
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $responsaveis['nome'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $responsaveis['telefone'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $responsaveis['endereco'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="data_nascimento" class="col-sm-2 control-label">Data de nascimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= $responsaveis['data_nascimento'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="sexo" value="F" required <?= ($responsaveis['sexo']=='F'?'checked':'')?>> Feminino
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="sexo" value="M" required <?= ($responsaveis['sexo']=='M'?'checked':'')?>> Masculino
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-pencil'></span> Atualizar</button>
                <a class='btn btn-danger' href='processamento.php?acao=excluir&id_responsavel=<?= $id_responsavel?>'><span class='glyphicon glyphicon-trash'></span> Excluir</a>
                <a class="btn btn-warning" href="index.php"><span class='glyphicon glyphicon-arrow-left'></span> Voltar</a>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>