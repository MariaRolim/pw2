<?php
    require_once('conexao.php');

    $categoria = $_POST['cat_produto'];
    $preco = $_POST['preco_produto'];
    $nome = $_POST['nome_produto'];
    $descricao = $_POST['desc_produto'];
    $imagem = $_POST['img_produto'];
    $estoqueMin = $_POST['estoque_min'];
    $estoqueMax = $_POST['estoque_max'];
    $quantEstoque = $_POST['quant_estoque'];

    $comando = "INSERT INTO produto (idcategoria, preco, nomeproduto, descricao, imagem, estoque_minimo, estoque_maximo, quant_estoque) VALUES ('$categoria', '$preco', '$nome', '$descricao', '$imagem', '$estoqueMin', '$estoqueMax', '$quantEstoque')";

    $rodou = mysqli_query($conexao, $comando);

    if ($rodou){
        echo "Produto inserido com sucesso!<br>";
        require "cabec.php";
    } else{
        echo "Erro ao tentar inserir produto".mysqli_error($conexao);
    }
?>