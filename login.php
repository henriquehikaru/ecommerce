<?php 
    include ("cabecalho.php");

    session_start();

    $_SESSION['sessaoConectado'] = false;
    $_SESSION['sessaoLogin'] = "";

    if ( isset($_COOKIE['loginCookie']) ) {
        $loginCookie = $_COOKIE['loginCookie'];
    } else {
        $loginCookie = '';
    }

    echo
        "<form action='formlogin' method='post' action=''>
            <label for='login'>Login</label>
            <input type='text' name='login' value'$loginCookie'>            
            <label for='senha'>Senha</label>
            <input type='password' name='senha'>
            <input type='submit' value='Enviar'>            
        </form>";

    if ( $_POST ) {

        $login = $_POST['login'];
        $senha = $_POST['senha'];
        setcookie('loginCookie', $login, time()+86400);

        if ( $login == 'henrique@unesp' && $senha = '123' ) {
            $_SESSION['sessaoConectado'] = true;
            $_SESSION['sessaoLogin'] = $login;

            header('Location: index.php');
        } else {
            echo "<b>Usuario ou senha nao encontrado</b>
                <br><br> <a ef='index.php'>Voltar</a>";
        }
    }

?>