<?php
require 'conexao.php';

$consultasql = $conexao->prepare('SELECT email,nome,senha FROM CadastroUsuarios WHERE email = ? AND senha = ?');
$consultasql->bind_param("ss", $_POST['email'], $_POST['senha']);
$consultasql->execute();

$usuario = mysqli_fetch_array($conexao);
var_dump( $usuario ); die;
if(!is_null($usuario) || $usuario != []){
    session_start();

    $_SESSION['nome'] =  $usuario["nome"];
    $_SESSION['email'] =  $usuario["email"];

    header('Location: ../Lista.html');
    exit;
    return http_response_code(200);
//    return "Logado com sucesso";
}else{
    return http_response_code(500);
}