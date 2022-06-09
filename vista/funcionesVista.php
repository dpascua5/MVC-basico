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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

EOT;
}


function jumbotron_html()
{
echo <<<EOT
<div class="container-fluid p-5 bg-primary text-white text-center">
  <div class="jumbotron">
    <h1>Projecte proteïnes</h1>
    <p>Aquesta pagina web ens permetrà preparar assajos de docking amb proteïnes i fàrmacs. Farem servir PHP, MySQL i bootstrap.</p>
  </div>
</div>

EOT;
}

function navegacion_html()
{
echo <<<EOT
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Inici <span class="glyphicon glyphicon-envelope"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estadístiques</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Proteinas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ver Proteinas</a></li>
			<li><a class="dropdown-item" href="#">Añadir Proteinas</a></li>
			<li><a class="dropdown-item" href="#">Editar Proteinas</a></li>
            <li><a class="dropdown-item" href="#">Borrar Proteinas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Fármacos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ver Fármacos</a></li>
			<li><a class="dropdown-item" href="#">Añadir Fármacos</a></li>
			<li><a class="dropdown-item" href="#">Editar Fármacos</a></li>
            <li><a class="dropdown-item" href="#">Borrar Fármacos</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Inici 2 <span class="glyphicon glyphicon-envelope"></span></a>
        </li>
	  </ul>
	
    </div>
  </div>
</nav>

EOT;
}


?>