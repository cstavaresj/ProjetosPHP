<?php
    include("validalogin.php");
    include_once("conexao.php");
    $ID = filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_NUMBER_INT);
       
    if(!empty($ID)){
        $sql = "DELETE FROM usuario WHERE ID='$ID'";
        $resultado_usuario = mysqli_query($conexao, $sql);
        if(mysqli_affected_rows($conexao)){
            echo "<script>alert('Usuário apagado com sucesso!');
                   window.top.location='logout.php';</script>";
        }else{
            echo "<script>alert('Erro ao apagar o usuário!');
                window.location='areadousuario.php?ID=$ID' </script>";
        }
    }
        mysqli_close($conexao);
?>
