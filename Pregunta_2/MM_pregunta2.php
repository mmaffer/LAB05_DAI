<?php
/*
  Nombre: Maria Moya
  Fecha: 18/04/2025
*/

function generarTrianguloPascal($n) {
    $triangulo = [];

    for ($i = 0; $i < $n; $i++) {
        $triangulo[$i] = [];
        for ($j = 0; $j <= $i; $j++) {
            if ($j == 0 || $j == $i) {
                $triangulo[$i][$j] = 1;
            } else {
                $triangulo[$i][$j] = $triangulo[$i-1][$j-1] + $triangulo[$i-1][$j];
            }
        }
    }

    return $triangulo;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $filas = $_POST["filas"];
    $triangulo = generarTrianguloPascal($filas);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pregunta 2 – Triángulo de Pascal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .piramide div {
      line-height: 1.8em;
    }
  </style>
</head>
<body class="container py-5">
  <div class="card text-center">
    <div class="card-header">
      <h3>Pregunta 2 – Triángulo de Pascal</h3>
    </div>
    <div class="card-body piramide">
      <p class="mb-4">Filas del triángulo de Pascal calculadas: <?= $filas ?></p>
      <?php foreach ($triangulo as $fila): ?>
        <div>
          <?php foreach ($fila as $num): ?>
            <span class="px-2"><?= $num ?></span>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="card-footer text-muted">
      Desarrollo de Aplicaciones en Internet
    </div>
  </div>
</body>
</html>
