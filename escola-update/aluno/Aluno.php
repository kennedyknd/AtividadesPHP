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

//    Getters e setters
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

//    Métodos
    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno";
        return $conexao->recuperarDados($sql);
    }

    public function recuperarDadosId($id_aluno)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno WHERE id_aluno = $id_aluno";

        $results = $conexao->recuperarDados($sql);

        foreach ($results as $row){
        }

        return $row;
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

    public function excluir($id_aluno)
    {
        $conexao = new Conexao();

        $sql = "DELETE from aluno WHERE id_aluno = '$id_aluno'";

        return $conexao->executar($sql);
    }

    public function atualizar($id_aluno, $dados)
    {
        $conexao = new Conexao();

        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $id_responsavel = $dados['id_responsavel'];
        $id_curso = $dados['id_curso'];
        $nota = $dados['nota'];

        $sql = "UPDATE aluno SET matricula = '$matricula',nome = '$nome',telefone = '$telefone',endereco = '$endereco',data_nascimento = '$data_nascimento',sexo = '$sexo',id_responsavel = '$id_responsavel',id_curso = '$id_curso',nota = '$nota' WHERE id_aluno = '$id_aluno'";

        return $conexao->executar($sql);
    }

}