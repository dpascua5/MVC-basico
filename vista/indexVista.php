<!DOCTYPE html>
<html lang="en">
<head>
  <title>Proyecto web con bootstrap y github 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container-fluid p-5 bg-primary text-white text-center">
  <div class="jumbotron">
    <h1>Projecte proteïnes</h1>
    <p>Aquesta pagina web ens permetrà preparar assajos de docking amb proteïnes i fàrmacs. Farem servir PHP, MySQL i bootstrap.</p>
  </div>
</div>

<div class="container">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Proteïnes
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Llistat</a></li>
			  <li><a href="#">Crea</a></li>
			  <li><a href="#">Modifica</a></li>
			  <li><a href="#">Esborra</a></li>
			</ul>
		  </li>

		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Fàrmacs
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Llistat</a></li>
			  <li><a href="#">Crea</a></li>
			  <li><a href="#">Modifica</a></li>
			  <li><a href="#">Esborra</a></li>
			</ul>
		  </li>

		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Assajos
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Llistat</a></li>
			  <li><a href="#">Crea</a></li>
			  <li><a href="#">Modifica</a></li>
			  <li><a href="#">Esborra</a></li>
			</ul>
		  </li>

		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span> David Pascual, Administrador</a></li>
		  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	  </div>
	</nav>
</div>






  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-3">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-9">

<?php 
//    print_r($listaFarmacos);
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
    echo "</table>";
?>




    </div>
  </div>
</div>

</body>
</html>


