<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel;

class GalleryCategory extends Controller
{
    public function view(): void
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getAllCategories()];
        $this->publicView('gallerycategory/view', 'Admin');
    }

    public function create(): void
    {
        echo 'Create method for Admin GalleryCategory';
    }

    public function update(): void
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getCategoryById($_GET['id'] ?? 0)];
        $this->publicView('gallerycategory/update', 'Admin');
    }

    public function delete(): void
    {
        echo 'Delete method for Admin GalleryCategory';
    }
}
