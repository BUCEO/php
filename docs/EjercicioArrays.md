🧪 Ejercicios Prácticos Avanzados de Arrays en PHP
🎯 Objetivo
Trabajar con arrays multidimensionales y funciones integradas de PHP como foreach, array_filter y array_map para manipulación de estructuras complejas.

🔢 Ejercicio 1: Crear y recorrer un array multidimensional
Crear un array de 3 productos. Cada producto debe contener:

nombre

precio

stock

Recorrer el array con foreach y mostrar todos los datos.

``` php

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
    echo "Nombre: " . $producto['nombre'] . "<br>";
    echo "Precio: $" . $producto['precio'] . "<br>";
    echo "Stock: " . $producto['stock'] . "<br><br>";
}
?>
```
🔍 Ejercicio 2: Filtrar productos con stock > 10
Utilizar array_filter para obtener solo los productos cuyo stock sea mayor a 10.

```php
<?php
$productosConStock = array_filter($productos, function($producto) {
    return $producto['stock'] > 10;
});

foreach ($productosConStock as $producto) {
    echo "Disponible: " . $producto['nombre'] . " (Stock: " . $producto['stock'] . ")<br>";
}
?>
```
💸 Ejercicio 3: Aplicar un descuento del 10% con array_map
Usar array_map para aplicar un descuento del 10% a todos los precios, y mostrar los productos con sus nuevos valores.

```php
<?php
$productosConDescuento = array_map(function($producto) {
    $producto['precio'] *= 0.90; // 10% de descuento
    return $producto;
}, $productos);

foreach ($productosConDescuento as $producto) {
    echo "Producto: " . $producto['nombre'] . " - Precio con descuento: $" . $producto['precio'] . "<br>";
}
?>

```