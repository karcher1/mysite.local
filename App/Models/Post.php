<?php

namespace App\Models;

use App\orm\Connector;
use PDO;

class Post
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Connector::getInstance()->getConnection();
    }

    public function getAllPosts(): array
    {
        $query = $this->db->query('SELECT * FROM post');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertPost(string $title, string $content, int $userId): bool
    {
        $query = $this->db->prepare('INSERT INTO post (title, content, user_id) VALUES (:title, :content, :user_id)');
        return $query->execute([
            'title' => $title,
            'content' => $content,
            'user_id' => $userId,
        ]);
    }
}
