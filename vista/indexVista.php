<?php

include("vista/funcionesVista.php");
head_html();
echo "<body>\n";
echo $sesion['nombre'];
jumbotron_html();
barra_navegacion_horizontal_html();
echo "\n<!--inicio contenidos menu vertical + especifico-->\n";
echo "<div class='container-fluid mt-5'>\n";
echo "\t<div class='row'>\n";
barra_navegacion_vertical();
echo "\n<!--inicio contenidos específico-->\n";

echo "<div class='col-sm-9'>\n";

echo '<table class="table table-hover">';
echo "\n";

echo "\t<tr>\n\t\t";
foreach($listaFarmacos[0] as $x => $x_value)
{
    echo "<th>";
    echo $x;
    echo "</th>";
}
echo "\n\t</tr>\n";


foreach($listaFarmacos as $farmaco)
{
//        print_r($farmaco);
    echo "\t<tr>\n\t\t";
    foreach($farmaco as $x => $x_value)
    {
        echo "<td>";
        echo $x_value;
        echo "</td>";
    }
    echo "\n\t</tr>\n";    
}
echo "</table>\n";

echo "</div>\n";


echo "\n<!--Fin contenidos específico-->\n";

echo "\n<!--Fin contenidos menu vertical + especifico-->\n";
echo "\t\t</div>\n";
echo "\t</div>\n";

echo "</body>\n";
echo "</html>\n";


/*    print_r($listaFarmacos);
    echo '<table class="table table-hover">';
    echo "\n";

    echo "\t<tr>\n\t\t";
    foreach($listaFarmacos[0] as $x => $x_value)
    {
        echo "<th>";
        echo $x;
        echo "</th>";
    }
    echo "\n\t</tr>\n";


    foreach($listaFarmacos as $farmaco)
    {
//        print_r($farmaco);
        echo "\t<tr>\n\t\t";
        foreach($farmaco as $x => $x_value)
        {
            echo "<td>";
            echo $x_value;
            echo "</td>";
        }
        echo "\n\t</tr>\n";    
    }
    echo "</table>";*/
