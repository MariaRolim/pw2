<?php
require_once('conexao.php');

$cpf = $_POST['cpf_usuario'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

$comando = "INSERT INTO endereco (cpf, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$cpf', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Endereço inserido com sucesso!<br>";
    require "cab.php";
} else{
    echo "Erro ao tentar inserir endereço".mysqli_error($conexao);
}
?>
