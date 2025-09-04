<?php
require_once 'src/ArrayProcessor.php';
require_once 'src/UserDataProcessor.php';

$users = [
    ['name' => 'Juan', 'age' => 25, 'active' => 'true'],
    ['name' => 'María', 'age' => 30, 'active' => 'false']
];

$userProcessor = new UserDataProcessor($users);
$result = $userProcessor
    ->filterActiveUsers()
    ->mapUserNames()
    ->getProcessedData();

print_r($result);