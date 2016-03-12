<?php
$conexao = mysqli_connect("localhost","root", "root", "inscricao");

$categoria_id = $_POST['categoria_id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];


function inserirInscrito($conexao, $categoria_id, $nome, $email, $endereco, $telefone, $cidade){
    $query = "insert into inscritos (categoria_id, nome, email, endereco, telefone, cidade) values ('{$categoria_id}', {$nome}, '{$email}','{$endereco}','{$telefone}','{$cidade}')";
    return mysqli_query($conexao, $query);
}


inserirInscrito($conexao, $categoria_id, $nome, $email, $endereco, $telefone, $cidade);

