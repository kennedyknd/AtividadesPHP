<?php
include_once ('../Conexao.php');
include_once ('../cabecalho.php');

$conexao = new Conexao();
?>
<h1 class="text-center">Responsáveis</h1>
<br>
<form class="form-horizontal" method="post" action="processamento.php?acao=salvar">
    <div class="form-group">
        <label for="nome" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
    </div>
    <div class="form-group">
        <label for="telefone" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
    </div>
    <div class="form-group">
        <label for="endereco" class="col-sm-2 control-label">Endereço</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
    </div>
    <div class="form-group">
        <label for="data_nascimento" class="col-sm-2 control-label">Data de nascimento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
        </div>
    </div>
    <div class="form-group">
        <label for="sexo" class="col-sm-2 control-label">Sexo</label>
        <div class="col-sm-10">
            <label class="radio-inline">
                <input type="radio" name="sexo" id="sexo" value="F" required> Feminino
            </label>
            <label class="radio-inline">
                <input type="radio" name="sexo" id="sexo" value="M" required> Masculino
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Inserir</button>
            <a class="btn btn-danger" href="index.php">Voltar</a>
        </div>
    </div>
</form>

<?php
include_once ('../rodape.php');
?>
