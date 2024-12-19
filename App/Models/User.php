<?php

namespace App\Models;

use Exception;

class User
{
    private array $users = [
        1 => [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'role' => 'Admin',
        ],
        2 => [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'role' => 'User',
        ],
    ];

    public function getAllUsers(): array
    {
        return $this->users;
    }

    public function getUserById(int $id): array
    {
        if (isset($this->users[$id])) {
            return $this->users[$id];
        }
        throw new Exception('User not found');
    }
}
