<?php
require_once 'src/ArrayProcessor.php';

$data = [1, 2, 3, 4, 5];
$processor = new ArrayProcessor($data);

$result = $processor
    ->filter(fn($x) => $x % 2 === 0)
    ->map(fn($x) => $x * 10)
    ->getData();

print_r($result); // [20, 40]