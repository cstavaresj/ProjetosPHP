<?php 
    session_start();
    $login = $_POST['email_login'];
    $senha = $_POST['senha_login'];
    $conexao = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor!");
    $select = mysql_select_db("almox") or die("Sem acesso ao DB, Entre em contato com o Administrador");
    $result = mysql_query("SELECT * FROM `usuario` WHERE `EMAIL` = '$login' AND `SENHA`= '$senha'");
     if(mysql_num_rows ($result) > 0 )
    {
        $_SESSION['email_login'] = $login;
        $_SESSION['senha_login'] = $senha;        
        header('location:site.php');

    }
    else
    {
        unset ($_SESSION['email_login']);
        unset ($_SESSION['senha_login']);
        unset ($_SESSION['ID']);
        header('location:index.php?msg=1');
    }
?>