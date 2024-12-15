<?php

namespace App\Models;

use Exception;

class PostCategory
{
    private array $categories = [
        1 => [
            'id' => 1,
            'name' => 'News',
            'description' => 'Category for news-related posts.',
        ],
        2 => [
            'id' => 2,
            'name' => 'Tutorials',
            'description' => 'Category for tutorials and guides.',
        ],
    ];

    public function getAllCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryById(int $id): array
    {
        if (isset($this->categories[$id])) {
            return $this->categories[$id];
        }
        throw new Exception('Category not found');
    }
}
