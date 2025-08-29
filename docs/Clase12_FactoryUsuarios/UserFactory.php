<?php
declare(strict_types=1);

namespace ONDA\Model;

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

class UserFactory {
    public static function create(array $data): User {
        return new User($data['username'], $data['email']);
    }
}
