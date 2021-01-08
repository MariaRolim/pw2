<?php
require_once('conexao.php');

$idendereco = $_POST['hdidendereco'];
$logradouro = $_POST['txtlogradouro'];
$numero = $_POST['txtnumero'];
$complemento = $_POST['txtscomplemento'];
$bairro = $_POST['txtbairro'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];


$comando = "UPDATE endereco SET logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade' 
            WHERE idendereco = $idendereco";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Endereço alterado com sucesso!<br>";
    require "subcab.html";
}
else{
    echo "Erro ao alterar endereço";
}
?>