<?php
    include("validalogin.php");
    include_once("conexao.php");
    $ordem = filter_input(INPUT_GET, 'ordem', FILTER_SANITIZE_NUMBER_INT);
   
    if(!empty($ordem)){
        $sql = "DELETE FROM produto WHERE ordem='$ordem'";
        $resultado_usuario = mysqli_query($conexao, $sql);
        if(mysqli_affected_rows($conexao)){
            header("Location: consulta.php?msg=6");
        }else{
            echo "<script>alert('Erro ao apagar o produto $nome!');</script>";
            header("Location: consulta.php");
        }
    }
        mysqli_close($conexao);  
?>