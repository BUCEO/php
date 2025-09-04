<?php

require_once 'ArrayProcessor.php';
require_once 'UserDataProcessor.php';

// Crear desde CSV (ejemplo)
// Suponiendo que tenemos un archivo users.csv con:
// name,age,active,email
// Juan,25,true,juan@email.com
// María,30,false,maria@email.com

try {
    $userProcessor = UserDataProcessor::createFromCSV('users.csv');
    
    $result = $userProcessor
        ->filterActiveUsers()
        ->sortByAge()
        ->getProcessedData();
        
    print_r($result);
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}