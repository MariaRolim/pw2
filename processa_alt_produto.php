<?php
    require_once('conexao.php');

    $idproduto = $_POST['hdidproduto'];
    $preco = $_POST['preco'];
    $nomeproduto = $_POST['txtnome'];
    $descricao = $_POST['txtdescricao'];
    $imagem = $_POST['img'];
    $estoqueMin = $_POST['estoquemin'];
    $estoqueMax = $_POST['estoquemax'];
    $quantEstoque = $_POST['quantestoque'];


    $comando = "UPDATE produto SET precoproduto = '$preco', nomeproduto = '$nomeproduto', descricao = '$descricao', imagem = '$imagem', estoqueMin = '$estoqueMin', estoqueMax = '$estoqueMax', quantEstoque = '$quantEstoque' 
                WHERE idproduto = $idproduto";

    $rodou = mysqli_query($conexao, $comando);

    if ($rodou){
        echo "Produto alterado com sucesso!<br>";
        require "subcab.html";
    }
    else{
        echo "Erro ao alterar produto";
    }
?>