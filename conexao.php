<?php

$servidor="localhost";
    $usuario="root";
    $senha="";
    $database="locafacil";
    $conexao= mysqli_connect("$servidor", "$usuario", "$senha", "$database");
 
    if(!$conexao){
    die("conexao não realizada");
    }else{
    echo "Conexao Realizada";
    }

    ?>