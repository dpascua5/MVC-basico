<?php 
//    echo "Soy el controlador";

    $paracetamol = array("nombre"=>"paracetamol", "descripción"=>"paracetamol", "ruta"=>"farmacos/paracetamol.mol", "fecha"=>"01/06/2022");
    $aspirina = array("nombre"=>"aspirina", "descripción"=>"aspirina", "ruta"=>"farmacos/aspirina.mol", "fecha"=>"02/06/2022");
    $ibuprofeno = array("nombre"=>"ibuprofeno", "descripción"=>"ibuprofeno", "ruta"=>"farmacos/ibuprofeno.mol", "fecha"=>"03/06/2022");

    $listaFarmacos=array($paracetamol, $aspirina, $ibuprofeno);

    //print_r($listaFarmacos);

    //definir una array que contiene 3 entradas, un array que contiene 3 arrays indexados. Los indices són los nombres de la base de datos
         //entrada uno: paracetamol, antiinflamatorio, farmacos/paracetamol.mol, 1/6/2022
         //entrada uno: ibuprofeno, antiinflamatorio, farmacos/ibuprofeno.mol, 1/6/2022
         //entrada uno: aspirina, antipirético, farmacos/aspirina.mol, 1/6/2022
    // Pruebo primero con una entrada sencilla

    require_once("vista/indexVista.php");

?>