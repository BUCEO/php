<?php
$productos = [
    [
        'nombre' => 'Teclado',
        'precio' => 1200,
        'stock' => 15
    ],
    [
        'nombre' => 'Mouse',
        'precio' => 800,
        'stock' => 8
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 15000,
        'stock' => 20
    ]
];

$productosConStock = array_filter($productos, function($producto) {
    return $producto['stock'] > 10;
});

foreach ($productosConStock as $producto) {
    echo "Disponible: " . $producto['nombre'] . " (Stock: " . $producto['stock'] . ")\n";
}
?>