<?php

require_once 'ArrayProcessor.php';

// Datos de ejemplo
$data1 = [1, 2, 3];
$data2 = [10, 20, 30];
$data3 = [100, 200, 300];

$processor = new ArrayProcessor($data1);

// Map múltiple
$result = $processor->mapMultiple(
    fn($a, $b, $c) => $a + $b + $c,
    $data2,
    $data3
);

print_r($result->getData());
// Resultado: [111, 222, 333]

// Map y filter combinados
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numberProcessor = new ArrayProcessor($numbers);

$result = $numberProcessor->mapAndFilter(
    fn($x) => $x * $x, // Cuadrado
    fn($x) => $x > 25  // Mayor que 25
);

print_r($result->getData());
// Resultado: [36, 49, 64, 81, 100]