<?php

namespace App\Models;

use Exception;

class GalleryCategory
{
    private array $categories = [
        1 => [
            'id' => 1,
            'name' => 'Nature',
            'description' => 'Category for nature-related images.',
        ],
        2 => [
            'id' => 2,
            'name' => 'Architecture',
            'description' => 'Category for architectural images.',
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
