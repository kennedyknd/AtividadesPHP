<?php

include_once("../Conexao.php");

class Curso
{
    protected $id_curso;
    protected $nome;

//    Getters e setters
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

//    Métodos
    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM curso";
        return $conexao->recuperarDados($sql);
    }

    public function recuperarDadosId($id_curso)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM curso WHERE id_curso = $id_curso";

        $results = $conexao->recuperarDados($sql);

        foreach ($results as $row){
        }

        return $row;
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "INSERT INTO curso (nome) VALUES ('$nome')";

        return $conexao->executar($sql);
    }

    public function excluir($id_curso)
    {
        $conexao = new Conexao();

        $sql = "DELETE from curso WHERE id_curso = '$id_curso'";

        return $conexao->executar($sql);
    }

    public function atualizar($id_curso, $dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];

        $sql = "UPDATE curso SET nome = '$nome' WHERE id_curso = '$id_curso'";

        return $conexao->executar($sql);
    }
}