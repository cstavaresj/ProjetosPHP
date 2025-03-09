<?php
    include("email.php");
    
    $ordem = filter_input(INPUT_POST,'ordem',FILTER_SANITIZE_NUMBER_INT);
    $codigo = filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_STRING);
    $fabricante = filter_input(INPUT_POST,'fabricante',FILTER_SANITIZE_STRING);
    $unidade = filter_input(INPUT_POST,'unidade',FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST,'valor',FILTER_SANITIZE_STRING);
    $quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_NUMBER_INT);
    $localizacao = filter_input(INPUT_POST,'localizacao',FILTER_SANITIZE_STRING);
    $observacao = filter_input(INPUT_POST,'observacao',FILTER_SANITIZE_STRING);

    $sql = "UPDATE produto SET codigo='$codigo', nome='$nome', marca='$marca', fabricante='$fabricante', unidade='$unidade', valor='$valor', quantidade='$quantidade', localizacao='$localizacao', observacao='$observacao' WHERE ordem='$ordem'";
    $resultado_produto = mysqli_query($conexao,$sql);
    
    echo "<center><h1>";
    if ($conexao) {
        header('Location: consulta.php?msg=5');
    }else{
        echo "<script>alert('Erro ao editar produto $nome!');</script>";
        header('Location: editar.php?ordem=$ordem');
    }
    echo "</h1></center>";
    mysqli_close($conexao);
?>