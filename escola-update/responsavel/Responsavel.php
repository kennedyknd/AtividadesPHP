<?php

include_once("../Conexao.php");

class Responsavel
{
    protected $id_responsavel;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;

//    Getters e setters
    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }

    public function setIdResponsavel($id_responsavel)
    {
        $this->id_responsavel = $id_responsavel;
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


//    Métodos
    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM responsavel";
        return $conexao->recuperarDados($sql);
    }

    public function recuperarDadosId($id_responsavel)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM responsavel WHERE id_responsavel = $id_responsavel";

        $results = $conexao->recuperarDados($sql);

        foreach ($results as $row){
        }

        return $row;
    }

    public function inserir($dados)
    {
        $nome= $dados['nome'];
        $telefone= $dados['telefone'];
        $endereco= $dados['endereco'];
        $data_nascimento= $dados['data_nascimento'];
        $sexo= $dados['sexo'];

        $conexao = new Conexao();

        $sql = "INSERT INTO responsavel (nome, telefone, endereco, data_nascimento, sexo)";
        $sql .= " VALUES ('$nome','$telefone','$endereco','$data_nascimento','$sexo')";

        return $conexao->executar($sql);
    }

    public function excluir($id_responsavel)
    {
        $conexao = new Conexao();

        $sql = "DELETE from responsavel WHERE id_responsavel = '$id_responsavel'";

        return $conexao->executar($sql);
    }

    public function atualizar($id_responsavel, $dados)
    {
        $conexao = new Conexao();

        $nome= $dados['nome'];
        $telefone= $dados['telefone'];
        $endereco= $dados['endereco'];
        $data_nascimento= $dados['data_nascimento'];
        $sexo= $dados['sexo'];

        $sql = "UPDATE responsavel SET nome = '$nome', telefone = '$telefone', endereco = '$endereco', data_nascimento = '$data_nascimento', sexo = '$sexo' WHERE id_responsavel = '$id_responsavel'";

        return $conexao->executar($sql);
    }

}