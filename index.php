<?php 
    //verificar sesiones
    //en caso de no ser un usuario autorizado enviar al indice
//    echo "Soy el indice.php";
    $sesion=array("nombre"=>"David Pascual", "rol"=>"administrador");
    require_once("controlador/indexControlador.php");
    
?>

