<?php
include_once ('../cabecalho.php');

?>
<h1 class="text-center">Responsáveis</h1>
<br>
<form class="form-horizontal" method="post" action="processamento.php">

    <div class="row">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-4">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group col-md-4">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>

    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="data_nascimento">Data Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="form-group col-md-4">
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
