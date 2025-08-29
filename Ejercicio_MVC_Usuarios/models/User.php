<?php
// models/User.php
declare(strict_types=1);

namespace App\Models;

class User {
    public function __construct(
        private string $username,
        private string $email
    ) {}

    public function getUsername(): string {
        return $this->username;
    }

    public function getEmail(): string {
        return $this->email;
    }
}
