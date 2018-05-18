<?php
include_once('Responsavel.php');
$responsavel = new Responsavel();

$responsaveis = $responsavel->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Responsáveis</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Responsável</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Nascimento</td>
            <td>Sexo</td>
        </tr>

        <?php foreach ($responsaveis as $responsavel){
            echo "
            <tr>
                <td>
                        <a href='add.php?id_responsavel={$responsavel['id_responsavel']}'>Alterar</a>
                        <a href='processamento.php?acao=excluir&id_responsavel={$responsavel['id_responsavel']}'>Excluir</a>
                </td>
                <td>{$responsavel['id_responsavel']}</td>
                <td>{$responsavel['nome']}</td>
                <td>{$responsavel['telefone']}</td>
                <td>{$responsavel['endereco']}</td>
                <td>{$responsavel['data_nascimento']}</td>
                <td>{$responsavel['sexo']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';