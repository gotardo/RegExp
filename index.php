<?php
    include("classes/RegExp.php");
    
    if (RegExp::isEmail("contacto@gotardo.es")){
        echo "Es un email";
        
    }else
        echo "No es un email"
    
?>