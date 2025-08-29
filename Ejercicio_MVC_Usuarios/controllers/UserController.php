<?php
// controllers/UserController.php
declare(strict_types=1);

namespace App\Controllers;

use App\Factories\UserFactory;

class UserController {
    public function createUser(array $data) {
        $user = UserFactory::create($data);
        echo "Usuario creado: " . $user->getUsername() . " (" . $user->getEmail() . ")";
    }
}
