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

    public function carregarPorId($id_responsavel)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM responsavel WHERE id_responsavel = $id_responsavel";
        $dados = $conexao->recuperarDados($sql);

        $this->id_responsavel = $dados[0]['id_responsavel'];
        $this->nome = $dados[0]['nome'];
        $this->telefone = $dados[0]['telefone'];
        $this->endereco = $dados[0]['endereco'];
        $this->data_nascimento = $dados[0]['data_nascimento'];
        $this->sexo = $dados[0]['sexo'];
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

    public function alterar($dados)
    {
        $id_responsavel = $dados['id_responsavel'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];

        $conexao = new Conexao();

        $sql = "UPDATE responsavel SET nome = '$nome', telefone = '$telefone', endereco = '$endereco', data_nascimento = '$data_nascimento', sexo = '$sexo' WHERE id_responsavel = $id_responsavel";

        return $conexao->executar($sql);
    }

    public function excluir($id_responsavel)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM responsavel WHERE id_responsavel = $id_responsavel";


        return $conexao->executar($sql);
    }

}