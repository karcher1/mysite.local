<?php

namespace App\Models;

use App\orm\Connector;
use PDO;

class GalleryCategory
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Connector::getInstance()->getConnection();
    }

    public function getAllCategories(): array
    {
        $query = $this->db->query('SELECT * FROM gallery_category');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertCategory(string $name): bool
    {
        $query = $this->db->prepare('INSERT INTO gallery_category (name) VALUES (:name)');
        return $query->execute(['name' => $name]);
    }
}
