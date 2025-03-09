<?php
    echo "<meta charset='UTF-8' />";
    include_once("conexao.php");
    
    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $senha = $_POST['senha_cad'];
        
    $sql = "INSERT INTO usuario (NOME, EMAIL, SENHA) VALUES('$nome', '$email', '$senha')";
    $resultado_produto = mysqli_query($conexao,$sql);
    
    echo "<center><h1>";
    if (!$conexao) {
        echo "<script>alert('Erro ao tentar cadastrar usuario $nome!');</script>";
    }else{ 
        echo "<script type='text/javascript'>
                alert('$nome, seu cadastro foi efetuado com sucesso! Efetue Login para continuar!');
                window.location='index.php';
              </script>";
    }
    echo "</h1></center>";
    mysqli_close($conexao);
?>
