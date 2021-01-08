<?php
require_once('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$datadenasc = $_POST['txtdata'];
$tipo = $_POST['txttipo'];


$comando = "UPDATE usuario SET nomeusuario = '$nome', email = '$email', senha = '$senha', datadenascimento = '$datadenasc', tipousuario = '$tipo' 
            WHERE cpf = $cpf";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Usuario alterado com sucesso!<br>";
    require "subcab.html";
}
else{
    echo "Erro ao alterar usuario";
}
?>