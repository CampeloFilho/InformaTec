<?php

include './conexao.php';


$nome_cliente       = $_POST['nome'];
$sobrenome_cliente  = $_POST['sobrenome'];
$email_cliente      = $_POST['email'];


$inserir = $mysqli -> query("INSERT INTO cliente VALUES
       ('$nome_cliente','$sobrenome_cliente','$email_cliente')");



if($inserir){
    echo "CAdastro realizado";
}

else {
    echo "CAdastro não realizado";
}
?>