<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("cabecalho.php"); ?>
    <title>Home</title>
</head>
<body>
    <?php 
        if ( $sessaoConectado ) {
        $idSessao = session_id();
        echo "<a href='logout.php'>Sair</a>
            <br>Olá, $login (ID sessão:<b>$idSessao</b>)
            <br>
            <a href='produtos.php'>Produtos</a>
            <a href='usuarios.php'>Usuarios</a>";
}
        else {
            echo "<a href='login.php'></a>";
        }
        echo "<hr>";    

    ?>
    
</body>
</html>