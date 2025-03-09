<html>
	<head>
		<?php
		include("cabecalho.php");
		include("validalogin.php");
		include_once("conexao.php");
		
		      $sql = "SELECT * FROM usuario WHERE EMAIL = '$EMAIL'";
		      $resultado_usuario = mysqli_query($conexao, $sql);
		      
		      while($row_usuario = mysqli_fetch_array($resultado_usuario)){
		          $NOME = $row_usuario['NOME'];
		          $ID = $row_usuario['ID'];
		      }            
        ?>
	</head>
	<body>
       <div style="text-align:right; color:gray"> <?php echo $EMAIL;?></div>
       <footer class="rodape"> <br>Copyright © 2019 - Carlos Soares<br>
								Engenharia de Computação - Universidade de Uberaba </footer>
    </body>
</html>
