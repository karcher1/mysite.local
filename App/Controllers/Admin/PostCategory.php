<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\PostCategory as PostCategoryModel;

class PostCategory extends Controller
{
    public function view(): void
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getAllCategories()];
        $this->publicView('postcategory/view', 'Admin');
    }

    public function create(): void
    {
        echo 'Create method for Admin PostCategory';
    }

    public function update(): void
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getCategoryById($_GET['id'] ?? 0)];
        $this->publicView('postcategory/update', 'Admin');
    }

    public function delete(): void
    {
        echo 'Delete method for Admin PostCategory';
    }
}
