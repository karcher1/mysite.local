<?php

namespace App\Models;

use Exception;

class Post
{
    private array $posts = [
        1 => [
            'id' => 1,
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'author' => 'John Doe',
        ],
        2 => [
            'id' => 2,
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
            'author' => 'Jane Smith',
        ],
    ];

    public function getAllPosts(): array
    {
        return $this->posts;
    }

    public function getPostById(int $id): array
    {
        if (isset($this->posts[$id])) {
            return $this->posts[$id];
        }
        throw new Exception('Post not found');
    }
}
