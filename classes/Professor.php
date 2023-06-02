<?php

class Professor
{
    public $prof_id;
    public $nome;
    public $sobrenome;
    public $data_nasc;
    public $email;
    public $tel;
    public $cpf;
    public $cep;
    public $endereco;
    public $n_casa;
    public $bairro;
    public $cidade;
    public $estado;
    public $senha;

    public function __construct($prof_id = false)
    {
        if ($prof_id){

            $this->prof_id = $prof_id;

            $this->carregar();
        }
    }

    public function inserir()
    {

        $sql = "INSERT INTO tb_prof (nome, sobrenome, data_nasc, email, tel, cpf, cep, endereco, n_casa, bairro, cidade, estado, senha) VALUES (
            '" .$this->nome. "',
            '" .$this->sobrenome. "',
            '" .$this->data_nasc. "',
            '" .$this->email. "',
            '" .$this->tel. "',
            '" .$this->cpf. "',
            '" .$this->cep. "',
            '" .$this->endereco. "',
            '" .$this->n_casa. "',
            '" .$this->bairro. "',
            '" .$this->cidade. "',
            '" .$this->estado. "',
            '" .$this->senha. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);

        echo "registrado com sucesso";
    }

    public function listar()
    {
        $sql = "SELECT * FROM tb_prof";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_prof WHERE prof_id=".$this->prof_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_prof WHERE prof_id=" . $this->prof_id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->prof_id = $linha['prof_id'];
        $this->nome = $linha['nome'];
        $this->sobrenome = $linha['sobrenome'];
        $this->data_nasc = $linha['data_nasc'];
        $this->email = $linha['email'];
        $this->tel = $linha['tel'];
        $this->cpf = $linha['cpf'];
        $this->cep = $linha['cep'];
        $this->endereco = $linha['endereco'];
        $this->n_casa = $linha['n_casa'];
        $this->bairro = $linha['bairro'];
        $this->cidade = $linha['cidade'];
        $this->estado = $linha['estado'];
        $this->senha = $linha['senha'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_prof SET
                    nome = '$this->nome' ,
                    sobrenome = '$this->sobrenome' ,
                    data_nasc = '$this->data_nasc' ,
                    email = '$this->email' ,
                    tel = '$this->tel' ,
                    cpf = '$this->cpf' ,
                    cep = '$this->cep' ,
                    endereco = '$this->endereco' ,
                    n_casa = '$this->n_casa' ,
                    bairro = '$this->bairro' ,
                    cidade = '$this->cidade' ,
                    estado = '$this->estado' ,
                    senha = '$this->senha' 
                WHERE prof_id = $this->prof_id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
        $conexao->exec($sql);
    }

}