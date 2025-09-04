<?php

require_once 'ArrayProcessor.php';

class UserDataProcessor {
    private ArrayProcessor $processor;
    
    public function __construct(array $userData) {
        $this->processor = new ArrayProcessor($userData);
    }
    
    /**
     * Filtra usuarios activos
     * @return UserDataProcessor
     */
    public function filterActiveUsers(): UserDataProcessor {
        $this->processor = $this->processor->filter(
            fn($user) => isset($user['active']) && $user['active'] == 'true'
        );
        return $this;
    }
    
    /**
     * Mapea nombres de usuarios a mayúsculas
     * @return UserDataProcessor
     */
    public function mapUserNames(): UserDataProcessor {
        $this->processor = $this->processor->map(
            function($user) {
                if (isset($user['name'])) {
                    $user['name'] = strtoupper($user['name']);
                }
                return $user;
            }
        );
        return $this;
    }
    
    /**
     * Filtra usuarios por edad mínima
     * @param int $minAge Edad mínima
     * @return array
     */
    public function getUsersByAge(int $minAge): array {
        $filtered = $this->processor->filter(
            fn($user) => isset($user['age']) && $user['age'] >= $minAge
        );
        return $filtered->getData();
    }
    
    /**
     * Calcula la edad promedio
     * @return float
     */
    public function getAverageAge(): float {
        $ages = $this->processor->getColumn('age');
        $numericAges = array_filter($ages, 'is_numeric');
        
        if (empty($numericAges)) {
            return 0.0;
        }
        
        return array_sum($numericAges) / count($numericAges);
    }
    
    /**
     * Ordena usuarios por edad
     * @return UserDataProcessor
     */
    public function sortByAge(): UserDataProcessor {
        $this->processor = $this->processor->sort(
            fn($a, $b) => ($a['age'] ?? 0) <=> ($b['age'] ?? 0)
        );
        return $this;
    }
    
    /**
     * Obtiene emails de usuarios
     * @return array
     */
    public function getUserEmails(): array {
        return $this->processor->getColumn('email');
    }
    
    /**
     * Obtiene los datos procesados
     * @return array
     */
    public function getProcessedData(): array {
        return $this->processor->getData();
    }
    
    /**
     * Método estático para crear desde CSV
     * @param string $filePath
     * @return UserDataProcessor
     */
    public static function createFromCSV(string $filePath): UserDataProcessor {
        $arrayProcessor = ArrayProcessor::createFromCSV($filePath);
        return new self($arrayProcessor->getData());
    }
}