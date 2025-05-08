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

foreach ($productos as $producto) {
    echo "Nombre: " . $producto['nombre'] . "\n";
    echo "Precio: $" . $producto['precio'] .  "\n";
    echo "Stock: " . $producto['stock'] .  "\n";
}
?>