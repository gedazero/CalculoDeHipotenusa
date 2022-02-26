<?php

$errores = '';
$enviado = '';

    if (isset($_POST['submit'])){ 
        $Cateto_Opuesto = $_POST["Cateto_Opuesto"];
        $Cateto_Adyacente = $_POST["Cateto_Adyacente"];
        
        if (!empty($Cateto_Opuesto) && !empty($Cateto_Adyacente)) {

        $hipotenusa = sqrt(pow($Cateto_Opuesto, 2) + pow($Cateto_Adyacente, 2));
        $enviado .= $hipotenusa;
        }
        else{
           $errores .= 'Por favor ingresa un los valores <br />';
        }
    }

    
    
    
require 'index.view.php';

?>