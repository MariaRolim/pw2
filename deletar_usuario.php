<html lang="en">
    <head>
        <title>Deletar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css"> 
        <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    </head>
<body>
    <?php
        require_once "conexao.php";

        $cpf = $_GET['cpf'];

        $comando = "DELETE FROM usuario WHERE cpf = $cpf";
        $result = mysqli_query($conexao, $comando);
        
        if($result){
            echo "Usuario excluido com sucesso!<br>";
            require "subcab.html";
        } else{
            echo "Erro ao tentar excluir usuario!";
        }
    ?>
</body>
</html>