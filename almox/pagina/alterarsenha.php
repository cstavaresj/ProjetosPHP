<?php
    include("conexao.php");
    
	$EMAIL = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $SENHA = filter_input(INPUT_POST,'senha_new',FILTER_SANITIZE_STRING);
    
    $sql = "UPDATE usuario SET SENHA='$SENHA' WHERE EMAIL='$EMAIL'";
    $resultado_produto = mysqli_query($conexao,$sql);
    
    echo "<center><h1>";
    if (!$conexao) {
        echo "<script>alert('Erro ao tentar alterar senha!!');</script>";
    }else{ 
        echo "<script type='text/javascript'>
                alert('Sua senha foi alterada com sucesso! Efetue Login para continuar!');
                window.location='index.php';
              </script>";
    }
    echo "</h1></center>";
    mysqli_close($conexao);

?>