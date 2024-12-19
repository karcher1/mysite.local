<?php

namespace App\Models;

use App\orm\Insert;
use App\orm\Connector;

class User
{
    public function getAllUsers(): array
    {
        $db = Connector::getInstance()->getConnection();
        $stmt = $db->query("SELECT * FROM user");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserById(int $id): array
    {
        $db = Connector::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertUser(array $data): void
    {
        $insert = new Insert();
        $insert
            ->into('user')
            ->fields(['username', 'email', 'password'])
            ->values([$data])
            ->execute();
    }
}
