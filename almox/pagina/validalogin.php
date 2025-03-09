<?php
            session_start();
            if((!isset ($_SESSION['email_login']) == true) and (!isset ($_SESSION['senha_login']) == true))
            {
                unset($_SESSION['email_login']);
                unset($_SESSION['senha_login']);
                unset($_SESSION['ID']);
                header('location:index.php?msg=2');
            }
            $EMAIL = $_SESSION['email_login'];
?>
