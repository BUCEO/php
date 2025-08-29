<?php
// factories/UserFactory.php
declare(strict_types=1);

namespace App\Factories;

use App\Models\User;

class UserFactory {
    public static function create(array $data): User {
        return new User($data['username'], $data['email']);
    }
}
