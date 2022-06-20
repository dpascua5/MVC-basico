<?php


function head_html()
{
echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Encabezado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

EOT;
}


function jumbotron_html()
{
echo <<<EOT

<!-- Inicio jumbotron-->

<div class="container-fluid p-5 bg-primary text-white text-center">
  <div class="jumbotron">
    <h1>Projecte proteïnes</h1>
    <p>Aquesta pagina web ens permetrà preparar assajos de docking amb proteïnes i fàrmacs. Farem servir PHP, MySQL i bootstrap.</p>
  </div>
</div>

<!-- Fin jumbotron-->

EOT;
}

function barra_navegacion_horizontal_html()
{
echo <<<EOT
<!-- Inicio navegación horizontal-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="margin-left:1em" class="nav-link" href="#">Inici <span class="glyphicon glyphicon-home"></span></a>
        </li>
        <li class="nav-item">
          <a  style="margin-left:1em" class="nav-link" href="#">Estadístiques</a>
        </li>
        <li class="nav-item dropdown">
          <a  style="margin-left:1em" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Proteinas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ver Proteinas</a></li>
			      <li><a class="dropdown-item" href="#">Añadir Proteinas</a></li>
			       <li><a class="dropdown-item" href="#">Editar Proteinas</a></li>
            <li><a class="dropdown-item" href="#">Borrar Proteinas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a style="margin-left:1em" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Fármacos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ver Fármacos</a></li>
      			<li><a class="dropdown-item" href="#">Añadir Fármacos</a></li>
			      <li><a class="dropdown-item" href="#">Editar Fármacos</a></li>
            <li><a class="dropdown-item" href="#">Borrar Fármacos</a></li>
          </ul>
        </li>
      </ul>
      <ul style="margin-right:1em" class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">DAVID PASCUAL, ADMIN <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-edit"></span>Editar Perfil</a></li>
            <li><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
          </li>
	  </ul>
	
    </div>
  </div>
</nav>

<!-- Fin navegación horizontal-->

EOT;
}


function barra_navegacion_vertical()
{
echo <<<EOT
<!-- Inicio menú vertical-->
      <div class="col-sm-3">
        <h3>Probando 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
<!-- Fin menú vertical-->

EOT;
}

?>