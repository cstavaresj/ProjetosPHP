<?php
$input = $_POST;
$erro = false;

if (isset($input['enviar'])) {
    
    foreach ($input as $key => $value) {
        
        if ($value == ""){
            
            $campo = str_replace(["_","-"]," ",$key);
            
            $error[] = 'O campo '.$campo.' deve ser preenchido';
        }
    }
    
       
    if ($erro){
        var_dump($erro);
    }
}
?>