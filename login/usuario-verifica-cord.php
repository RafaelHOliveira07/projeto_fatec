<?php

session_start();

$usuario = $_SESSION['usuario_logado'] ?? 0;
$sql = "SELECT * FROM tb_cord WHERE usuario='{$usuario}'";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital', 'root', '');
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];

echo $usuario_logado;

if(!(($usuario) === ($usuario_logado))){
    //Você não tem acesso a esta funcionalidade
    header('Location: usuario-nao-logado.php');
}

?>