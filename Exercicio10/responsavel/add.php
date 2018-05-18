<?php
include_once ('../cabecalho.php');
include_once 'Responsavel.php';

$responsavel = new Responsavel();

if(!empty($_GET['id_responsavel'])){
    $responsavel->carregarPorId($_GET['id_responsavel']);
}
?>
<h1 class="text-center">Responsáveis</h1>
<br>
<form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

    <input type="hidden" name="id_responsavel" class="form-control" value="<?php echo $responsavel->getIdResponsavel();?>">

    <div class="row">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="<?php echo $responsavel->getNome();?>" id="nome" name="nome" required>
        </div>

        <div class="form-group col-md-4">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" value="<?php echo $responsavel->getTelefone();?>" id="telefone" name="telefone" required>
        </div>
        <div class="form-group col-md-4">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" value="<?php echo $responsavel->getEndereco();?>" id="endereco" name="endereco" required>
        </div>

    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="data_nascimento">Data Nascimento</label>
            <input type="date" class="form-control" value="<?php echo $responsavel->getDataNascimento();?>" id="data_nascimento" name="data_nascimento" required>
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
