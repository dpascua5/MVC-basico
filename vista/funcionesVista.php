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


?>