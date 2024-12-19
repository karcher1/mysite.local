<?php

namespace App\Models;

use App\orm\Connector;
use App\orm\Insert;
use PDO;

class Gallery
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Connector::getInstance()->getConnection();
    }

    public function getAllGallery(): array
    {
        $query = $this->db->query('SELECT * FROM gallery');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertGallery(array $data): void
    {
        $insert = new Insert();
        $insert
            ->into('gallery')
            ->fields(['name', 'image', 'category_id'])
            ->values([[
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
            ]])
            ->execute();
    }
}
