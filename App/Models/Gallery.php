<?php

namespace App\Models;

use App\Orm\Connector;
use App\Orm\Insert;

class Gallery
{
    private $db;

    public function __construct()
    {
        $this->db = Connector::getConnection();
    }

    public function getAllGallery(): array
    {
        $query = $this->db->query(
            "SELECT g.id, g.name, g.image, g.category_id AS categoryId, gc.name AS categoryName 
         FROM gallery g 
         LEFT JOIN gallery_category gc 
         ON g.category_id = gc.id"
        );
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function getOneGallery(int $id): array
    {
        $stmt = $this->db->prepare("SELECT g.*, gc.name as categoryName FROM gallery g LEFT JOIN gallery_category gc ON g.category_id = gc.id WHERE g.id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$result) {
            throw new \Exception('Gallery item not found');
        }

        return $result;
    }

    public function insertGallery(array $data): bool
    {
        $insert = new Insert();
        $query = $insert
            ->setTable('gallery')
            ->setFields(['name', 'image', 'category_id'])
            ->setValues([$data])
            ->getQuery();

        return $this->db->exec($query) > 0;
    }
}
