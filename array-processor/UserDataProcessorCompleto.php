<?php

require_once 'UserDataProcessor.php';

// Datos de usuarios
$users = [
    ['id' => 1, 'name' => 'Juan Pérez', 'age' => 25, 'active' => 'true', 'email' => 'juan@email.com'],
    ['id' => 2, 'name' => 'María García', 'age' => 30, 'active' => 'false', 'email' => 'maria@email.com'],
    ['id' => 3, 'name' => 'Pedro López', 'age' => 22, 'active' => 'true', 'email' => 'pedro@email.com'],
    ['id' => 4, 'name' => 'Ana Martínez', 'age' => 35, 'active' => 'true', 'email' => 'ana@email.com'],
    ['id' => 5, 'name' => 'Luis Rodríguez', 'age' => 28, 'active' => 'false', 'email' => 'luis@email.com']
];

// Procesamiento completo
$userProcessor = new UserDataProcessor($users);

echo "=== USUARIOS ACTIVOS (MAYÚSCULAS) ===\n";
$activeUsers = $userProcessor
    ->filterActiveUsers()
    ->mapUserNames()
    ->getProcessedData();

print_r($activeUsers);

echo "\n=== EDAD PROMEDIO ===\n";
$averageAge = $userProcessor->getAverageAge();
echo "Edad promedio: " . number_format($averageAge, 2) . " años\n";

echo "\n=== USUARIOS MAYORES DE 25 AÑOS ===\n";
$adultUsers = $userProcessor->getUsersByAge(25);
print_r($adultUsers);

echo "\n=== EMAILS DE USUARIOS ===\n";
$emails = $userProcessor->getUserEmails();
print_r($emails);