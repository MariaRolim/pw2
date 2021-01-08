<?php

$conexao = mysqli_connect("localhost", "root", "", "mgstore");

if (! $conexao){
    echo "Deu Erro - Não Conectou!".mysqli_connect_error();
}

?>