<?php

include_once("../Conexao.php");

class Aluno
{
    protected $id_aluno;
    protected $matricula;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;
    protected $id_responsavel;
    protected $id_curso;
    protected $nota;

    public function getIdAluno()
    {
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }

    public function setIdResponsavel($id_responsavel)
    {
        $this->id_responsavel = $id_responsavel;
    }

    public function getIdCurso()
    {
        return $this->id_curso;
    }

    public function setIdCurso($id_curso)
    {
        $this->id_curso = $id_curso;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_aluno)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno WHERE id_aluno= $id_aluno";
        $dados = $conexao->recuperarDados($sql);

        $this->id_aluno= $dados[0]['id_aluno'];
        $this->matricula = $dados[0]['matricula'];
        $this->nome = $dados[0]['nome'];
        $this->telefone = $dados[0]['telefone'];
        $this->endereco = $dados[0]['endereco'];
        $this->data_nascimento = $dados[0]['data_nascimento'];
        $this->sexo = $dados[0]['sexo'];
        $this->id_responsavel = $dados[0]['id_responsavel'];
        $this->id_curso = $dados[0]['id_curso'];
        $this->nota = $dados[0]['nota'];
    }

    public function inserir($dados)
    {
        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $id_responsavel = $dados['id_responsavel'];
        $id_curso = $dados['id_curso'];
        $nota = $dados['nota'];

        $conexao = new Conexao();

        $sql = "INSERT INTO aluno (matricula, nome, telefone, endereco, data_nascimento, sexo, id_responsavel, id_curso, nota)";
        $sql .= " VALUES ('$matricula','$nome','$telefone','$endereco','$data_nascimento','$sexo','$id_responsavel','$id_curso','$nota')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_aluno= $dados['id_aluno'];
        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $id_responsavel = $dados['id_responsavel'];
        $id_curso = $dados['id_curso'];
        $nota = $dados['nota'];

        $conexao = new Conexao();

        $sql = "UPDATE aluno SET matricula = '$matricula', nome = '$nome', telefone = '$telefone', endereco = '$endereco', data_nascimento = '$data_nascimento', sexo = '$sexo', id_responsavel = '$id_responsavel', id_curso = '$id_curso', nota = '$nota' WHERE id_aluno= $id_aluno";

        return $conexao->executar($sql);
    }


    public function excluir($id_aluno)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM aluno WHERE id_aluno= $id_aluno";


        return $conexao->executar($sql);
    }

}