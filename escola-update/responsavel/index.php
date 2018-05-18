<?php
include_once('Responsavel.php');
$responsavel = new Responsavel();

$responsaveis = $responsavel->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Responsáveis</h1>
    <br>
    <a class="btn btn-warning" href="formulario.php"><span class='glyphicon glyphicon-edit'></span> Inserir</a>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped table-condensed">
        <thead>
            <th width="10%">Ações</th>
            <th>ID responsavel</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de nascimento</th>
            <th>Sexo</th>
        </thead>

        <?php foreach ($responsaveis as $aResponsavel) {
            echo "
            <tr>
                <td>
                    <a class='btn btn-primary' href='atualizar.php?id_responsavel={$aResponsavel['id_responsavel']}'><span class='glyphicon glyphicon-pencil'></span> Atualizar</a>
                </td>
                <td>{$aResponsavel['id_responsavel']}</td>
                <td>{$aResponsavel['nome']}</td>
                <td>{$aResponsavel['telefone']}</td>
                <td>{$aResponsavel['endereco']}</td>
                <td>{$aResponsavel['data_nascimento']}</td>
                <td>{$aResponsavel['sexo']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';