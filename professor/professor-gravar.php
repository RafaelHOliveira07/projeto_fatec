<?php

require_once 'login/usuario-verifica-adm.php';

require_once "../classes/Professor.php";

$professor = new Professor();

$professor->nome = $_POST['nome'];
$professor->sobrenome = $_POST['sobrenome'];
$professor->data_nasc = $_POST['data_nasc'];
$professor->email = $_POST['email'];
$professor->tel = $_POST['tel'];
$professor->cpf = $_POST['cpf'];
$professor->cep = $_POST['cep'];
$professor->endereco = $_POST['endereco'];
$professor->n_casa = $_POST['n_casa'];
$professor->bairro = $_POST['bairro'];
$professor->cidade = $_POST['cidade'];
$professor->estado = $_POST['estado'];
$professor->senha = $_POST['senha'];

$professor->inserir();