<?php
require 'conexao.php';

$stmt = $conn->prepare('SELECT email,nome FROM CadastroUsuarios WHERE email = :email AND password = :password');
$stmt->execute(array('email' => $_POST["email"], 'password' => $_POST["password"]));

$usuario = $stmt->fetchAll()[0];
if(!is_null($usuario) || $usuario != []){
    session_start();

    $_SESSION['nome'] =  $usuario["nome"];
    $_SESSION['email'] =  $usuario["email"];

    header('Location: ../Lista.html');
    exit;
    //return http_response_code(200);
//    return "Logado com sucesso";
}else{
    return http_response_code(500);
}