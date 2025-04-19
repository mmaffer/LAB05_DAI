<?php
/*
  Nombre: Maria Moya
  Fecha: 18/04/2025
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kilos = $_POST["kilos"];
    $tipo = $_POST["tipo"];
    $tamano = $_POST["tamano"];
    $precio = $_POST["precio"];
    $precio_original = $precio;

    if ($tipo === "A") {
        $precio += ($tamano == 1) ? 0.20 : 0.30;
    } elseif ($tipo === "B") {
        $precio -= ($tamano == 1) ? 0.30 : 0.50;
    }

    $ganancia = $precio * $kilos;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pregunta 3 – Asociación de Vinicultores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <div class="card text-center">
    <div class="card-header">
      <h3>Pregunta 3 - Asociación de Vinicultores</h3>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <div class="col">Cantidad de uva entregada (kg): <?= $kilos ?></div>
        <div class="col">Tipo de uva: <?= $tipo ?></div>
      </div>
      <div class="row mb-4">
        <div class="col">Precio inicial por kg (S/): <?= $precio_original ?></div>
        <div class="col">Tamaño de uva: <?= $tamano ?></div>
      </div>
      <h4>Ganancia Final: S/<?= number_format($ganancia, 0) ?></h4>
    </div>
    <div class="card-footer text-muted">
      Desarrollo de Aplicaciones en Internet
    </div>
  </div>
</body>
</html>
