<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\PostCategory as ModelsPostCategory;

class PostCategory extends Controller
{
    public function view(): void
    {
        $model = new ModelsPostCategory();
        $this->data = ['categories' => $model->getAllCategories()];
        $this->publicView('postcategory/view', 'User');
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            if ($name) {
                $model = new ModelsPostCategory();
                if ($model->insertCategory($name)) {
                    header("Location: /post-category");
                    exit;
                }
            }
        }

        $this->publicView('postcategory/create', 'User');
    }
}
