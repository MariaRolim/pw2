<?php
require_once('conexao.php');

$cpf = $_POST['cpf_usuario'];
$nome = $_POST['nome_usuario'];
$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];
$datanasc = $_POST['data_usuario'];
$sexo = $_POST['sexo'];
$usuario = $_POST['tipo_usuario'];

$comando = "INSERT INTO usuario (cpf, nomeusuario, email, senha, datadenascimento, sexo, tipousuario) VALUES ('$cpf', '$nome', '$email', '$senha', '$datanasc', '$sexo', '$usuario')";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Usuário inserido com sucesso!<br>";
    require "cabecalho.php";
} else{
    echo "Erro ao tentar inserir usuário".mysqli_error($conexao);
}
?>