<?php
/*
  Nombre: Maria Moya
  Fecha: 18/04/2025
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $p = ($a + $b + $c) / 2;
    $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pregunta 1 – Área del Triángulo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <div class="card text-center">
    <div class="card-header">
      <h3>Pregunta 1 - Área del Triángulo</h3>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <div class="col">Primer lado (a) = <?= $a ?></div>
        <div class="col">Segundo lado (b) = <?= $b ?></div>
        <div class="col">Tercer lado (c) = <?= $c ?></div>
      </div>
      <h4>Área = <?= number_format($area, 1) ?></h4>
    </div>
    <div class="card-footer text-muted">
      Desarrollo de Aplicaciones en Internet
    </div>
  </div>
</body>
</html>
