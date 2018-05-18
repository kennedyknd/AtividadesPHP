<?php

include_once("../Conexao.php");

class Curso
{
    protected $id_curso;
    protected $nome;

    public function getIdCurso()
    {
        return $this->id_curso;
    }

    public function setIdCurso($id_curso)
    {
        $this->id_curso = $id_curso;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM curso";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_curso)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM curso WHERE id_curso = $id_curso";
        $dados = $conexao->recuperarDados($sql);

        $this->id_curso = $dados[0]['id_curso'];
        $this->nome = $dados[0]['nome'];
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "INSERT INTO curso (nome) VALUES ('$nome')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_curso = $dados['id_curso'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "UPDATE curso SET nome = '$nome' WHERE id_curso = $id_curso";

        return $conexao->executar($sql);
    }


    public function excluir($id_curso)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM curso WHERE id_curso = $id_curso";


        return $conexao->executar($sql);
    }
}