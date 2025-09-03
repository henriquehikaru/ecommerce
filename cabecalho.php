<?php 
    session_start();
    if ( isset($_SESSION['sessaoConectado']) ) {

        $sessaoConectado = $_SESSION['sessaoConectado'];
        $login = $_SESSION['sessaoLogin'];

    } 
    else {
        $sessaoConectado = false;
    }

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