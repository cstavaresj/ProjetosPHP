<?php 
 	if(isset($_GET['msg'])){
 		$msg = $_GET['msg'];
 		switch($msg){
 			case 1:
 ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="danger" style="color:#721c24; background-color:#f8d7da; border-color:#f5c6cb">
 						<center>O Email e/ou senha estão incorretos. 
 						<br>Por favor tente novamente.
 						<a href="index.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
 <?php
 				break;
 			case 2:
 ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="danger" style="color:#721c24; background-color:#f8d7da; border-color:#f5c6cb">
 						<center>Você não tem permissão para acessar esta página.
 						<a href="index.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
 <?php
 				break;
 			case 3:
 ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Logout realizado com sucesso.
 						<a href="index.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
 <?php
 				break;
            case 4:
?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Produto cadastrado com sucesso!
 						<a href="addproduto.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
<?php
 				break;
            case 5:
    ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Produto editado com sucesso!
 						<a href="consulta.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
<?php
 				break;
            case 6:
    ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Produto deletado com sucesso!
 						<a href="consulta.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
<?php
 				break;
            case 7:
    ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Dados editados com sucesso!
 						<a href="areadousuario.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
<?php
 				break;
 			case 8:
    ?>
 				<div class="alert" style="position:relative; margin-bottom:1rem; border:1px solid transparent; border-radius:.25rem">
 					<div class="success" style="color:#155724; background-color:#d4edda; border-color:#c3e6cb">
 						<center>Email alterado com sucesso!
 						<a href="index.php" class="close" data-dismiss="alert">&times</a></center>
 					</div>
 				</div>
<?php
 				break;
 		}
 	}
 ?>