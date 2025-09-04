// Datos de ejemplo
$users = [
    ['id' => 1, 'name' => 'Juan', 'age' => 25, 'active' => 'true', 'email' => 'juan@email.com'],
    ['id' => 2, 'name' => 'María', 'age' => 30, 'active' => 'false', 'email' => 'maria@email.com'],
    ['id' => 3, 'name' => 'Pedro', 'age' => 22, 'active' => 'true', 'email' => 'pedro@email.com'],
    ['id' => 4, 'name' => 'Ana', 'age' => 35, 'active' => 'true', 'email' => 'ana@email.com'],
    ['id' => 5, 'name' => 'Luis', 'age' => 28, 'active' => 'false', 'email' => 'luis@email.com']
];

// Uso de UserDataProcessor
$userProcessor = new UserDataProcessor($users);

// Ejemplo completo
$result = $userProcessor
    ->filterActiveUsers()
    ->mapUserNames()
    ->sortByAge()
    ->getProcessedData();

print_r($result);

// Obtener emails
$emails = $userProcessor->getUserEmails();

// Calcular edad promedio
$averageAge = $userProcessor->getAverageAge();