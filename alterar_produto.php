<!DOCTYPE html>
    <html lang="en">
    <head>
        <title class="link">Alterar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css"> 
        <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="cab">
            <div class="c"><img class="logo" src="log.png" alt="Logo loja"></div>
            <div class="box1">
                <div><a class="formulario"  href="sobrealoja.html">SOBRE A LOJA</a><br></div>
                <div><a class="formulario"  href="administrador.html">ADMINISTRADOR</a><br></div>
                <div><a class="formulario"  href="listar_produtos.php">PRODUTOS</a><br></div>
            </div>
            <div id="car"><a href="carrinhodecompras.html"><img class="icon" src="carrinho.png" alt="Carrinho de compras"></a></div>
            <div id="car"><a href="carrinhodecompras.html"><img class="icon" src="lupa.png" alt="Lupa"></a></div>
        </div>

<?php 
      require_once "conexao.php";

      $idproduto = $_GET['idproduto'];

      $comando = "SELECT * FROM produto WHERE idproduto = $idproduto";
      $result = mysqli_query($conexao, $comando);
      $linha = mysqli_fetch_assoc($result);  
?>

    <h1 id="bv">Alterar produto</h1>
    <center>
    <div class="f">
        <div div class="f2">
            <form class="form_user" action="processa_alt_produto.php" method="POST">

            <input type="hidden" name= "hdidproduto" value="<?=$linha['idproduto']?>">
            
            <p class="nomeproduto">PREÇO:<br><br><input class="tab" type="number" name="preco" value="<?=$linha['precoproduto']?>"></p>
            <p class="nomeproduto">NOME DO PRODUTO:<br><br> <input class="tab" type="text" name="txtnome" value="<?=$linha['nomeproduto']?>"></p>
            <p class="nomeproduto">DESCRIÇÃO:<br><br> <input class="tab" type="text" name="txtdescricao" value="<?=$linha['descricao']?>"></p>
            <p class="nomeproduto">IMAGEM:<br><br> <input class="tab" type="text" name="img" value="<?=$linha['imagem']?>"></p>
            <p class="nomeproduto">ESTOQUE MÍNIMO:<br><br> <input class="tab" type="number" name="estoquemin" value="<?=$linha['estoqueMin']?>"></p>
            <p class="nomeproduto">ESTOQUE MÁXIMO:<br><br> <input class="tab" type="number" name="estoquemax" value="<?=$linha['estoqueMax']?>"></p>
            <p class="nomeproduto">QUANTIDADE ESTOQUE:<br><br> <input class="tab" type="number" name="quantestoque" value="<?=$linha['quantEstoque']?>"></p>
            <button type="submit">Alterar</button>
            </form>
        </div>          
    </div>
    <center>
        <br><br>
        <center>
        <a class="linkform" href="listar_produtos.php">Listar Produtos</a>||
        <a class="linkform" href="deletar_produto.php?cpf=<?=$linha['idproduto'];?>">Deletar Produto</a>
        </center>

        <div class="mae">
            <div class="subroda"><p class="infor">SOBRE A LOJA</p><a class="in" href="sobrealoja.html">Quem somos</a><br><br><a class="in" href="Index.html">Pagina Inicial</a><br><br><a class="in" href="formulariocadastro.html">Cadastro</a><br><br><a class="in" href="formulariologin.html">Login</a></div>
            <div class="subroda"><p class="infor">POLÍTICAS</p><a class="in" href="">Entregas</a><br><br><a class="in" href="">Promoções e descontos</a><br><br><a class="in" href="">Fretes</a><br><br><a class="in" href="">Trocas e Devoluções</a></div>
            <div class="subroda"><p class="infor">PRODUTOS</p><a class="in" href="carrinhodecompras.html">Carrinho de compras</a><br><br><a class="in" href="listar_produtos.php">Produtos disponiveis</a><br><br><a class="in" href="">Queima de estoque</a><br><br><a class="in" href="">Produtos esgotados</a></div>
            <div class="subroda"><p class="infor">FORMAS DE PAGAMENTO</p><img class="" src="formasdepag.png" alt="Formas de pagamento"></div>
        </div>

        <div class="rodape"><div><img class="roda" src="roda.png" alt="Logo loja"></div>
        <div><p class="r">Endereço: Av. João Olímpio de Oliveira, 1561 - Vila Asem, Itapetininga - SP, 18202-000</p>
            <p class="r">Telefone: (15)3376-9930</p></div>
            <div><img class="sociais" src="insta.png" alt="Icon Instagram">
                <img class="sociais" src="face.png" alt="Icon Face"></div>   
        </div>
    </body>
</html>