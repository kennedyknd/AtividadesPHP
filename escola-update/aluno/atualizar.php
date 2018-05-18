<?php
include_once('../Conexao.php');
include_once('Aluno.php');
include_once('../cabecalho.php');

$conexao = new Conexao();
$aluno = new Aluno();

$id_aluno = $_GET['id_aluno'];

$alunos = $aluno->recuperarDadosId($id_aluno);

?>
    <h1 class="text-center">Atualizar Alunos - ID <?= $id_aluno ?></h1>
    <br>
    <form class="form-horizontal" method="post" action="processamento.php?acao=alterar&id_aluno=<?= $id_aluno ?>">
        <div class="form-group">
            <label for="matricula" class="col-sm-2 control-label">Matrícula</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="matricula" name="matricula" maxlength="10"
                       value="<?= $alunos['matricula'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $alunos['nome'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone"
                       value="<?= $alunos['telefone'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco"
                       value="<?= $alunos['endereco'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="data_nascimento" class="col-sm-2 control-label">Data de nascimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                       value="<?= $alunos['data_nascimento'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="sexo" value="F"
                           required <?= ($alunos['sexo'] == 'F' ? 'checked' : '') ?>> Feminino
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexo" id="sexo" value="M"
                           required <?= ($alunos['sexo'] == 'M' ? 'checked' : '') ?>> Masculino
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="id_responsavel" class="col-sm-2 control-label">ID responsável</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_responsavel" name="id_responsavel">
                    <?php
                    $sql = "select id_responsavel, nome from responsavel";
                    $id_responsaveis = $conexao->recuperarDados($sql);
                    foreach ($id_responsaveis as $id_responsavel) {
                        echo "<option value='{$id_responsavel['id_responsavel']}' " . (($alunos['id_responsavel'] == $id_responsavel['id_responsavel']) ? 'selected' : '') . ">{$id_responsavel['id_responsavel']} - {$id_responsavel['nome']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="id_curso" class="col-sm-2 control-label">ID curso</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_curso" name="id_curso">
                    <?php
                    $sql = "select id_curso, nome from curso";
                    $id_cursos = $conexao->recuperarDados($sql);
                    foreach ($id_cursos as $id_curso) {
                        echo "<option value='{$id_curso['id_curso']}'" . (($alunos['id_curso'] == $id_curso['id_curso']) ? ' selected' : '') . ">{$id_curso['id_curso']} - {$id_curso['nome']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="nota" class="col-sm-2 control-label">Nota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nota" name="nota" value="<?= $alunos['nota'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-pencil'></span> Atualizar
                </button>
                <a class='btn btn-danger' href='processamento.php?acao=excluir&id_aluno=<?= $id_aluno ?>'><span
                            class='glyphicon glyphicon-trash'></span> Excluir</a>
                <a class="btn btn-warning" href="index.php"><span class='glyphicon glyphicon-arrow-left'></span> Voltar</a>
            </div>
        </div>
    </form>
<?php
include_once('../rodape.php');
?>