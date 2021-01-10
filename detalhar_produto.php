<!DOCTYPE html>
    <html lang="en">
    <head>
        <title class="link">Detalhar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css"> 
        <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="cab">
            <div class="c"><img class="logo" src="log.png" alt="Logo loja"></div>
            <div class="box1">
                <div><a class="formulario"  href="formulariologin.html">LOGIN</a><br></div>
                <div><a class="formulario"  href="sobrealoja.html">SOBRE A LOJA</a><br></div>
                <div><a class="formulario"  href="administrador.html">ADMINISTRADOR</a><br></div>
                <div><a class="formulario"  href="listar_produtos.php">PRODUTOS</a><br></div>
            </div>
            <div id="car"><a href="carrinhodecompras.html"><img class="icon" src="carrinho.png" alt="Carrinho de compras"></a></div>
            <div id="car"><a href="carrinhodecompras.html"><img class="icon" src="lupa.png" alt="Lupa"></a></div>
        </div>
    <h1 id="bv">Detalhes do Produto</h1>

    <?php
        require_once "conexao.php";

        $idproduto = $_GET['idproduto'];

        $comando = "SELECT * FROM produto WHERE idproduto = $idproduto";
        $registro = mysqli_query($conexao, $comando);
        $linha = mysqli_fetch_assoc($registro);
        
    ?>
        <div align="left">
            <p class="nomeproduto"><?=$linha['imagem']?></p>
        </div>
        <div>
            <p class="nomeproduto">CATEGORIA: <?=$linha['idcategoria']?></p>
            <p class="nomeproduto">PREÇO: <?=$linha['precoproduto']?></p>
            <p class="nomeproduto">NOME DO PRODUTO: <?=$linha['nomeproduto']?></p>
            <p class="nomeproduto">DESCRIÇÃO: <?=$linha['descricao']?></p>
            <p class="nomeproduto">QUANTIDADE ESTOQUE: <?=$linha['quantEstoque']?></p>
        </div>
            <center>   
                <a class="comprar" href="">COMPRAR</a>
            </center><br><br>

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