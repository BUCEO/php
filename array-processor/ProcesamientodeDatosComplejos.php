<?php

require_once 'ArrayProcessor.php';

$products = [
    ['name' => 'Laptop', 'price' => 1200, 'stock' => 15],
    ['name' => 'Mouse', 'price' => 25, 'stock' => 0],
    ['name' => 'Keyboard', 'price' => 75, 'stock' => 8],
    ['name' => 'Monitor', 'price' => 300, 'stock' => 3],
    ['name' => 'Headphones', 'price' => 50, 'stock' => 0]
];

$processor = new ArrayProcessor($products);

// Productos con stock, con impuesto del 21%
$availableProducts = $processor
    ->filter(fn($product) => $product['stock'] > 0)
    ->map(function($product) {
        $product['price_with_tax'] = $product['price'] * 1.21;
        return $product;
    })
    ->getData();

print_r($availableProducts);