<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\GalleryCategory as ModelsGalleryCategory;

class GalleryCategory extends Controller
{
    public function view(): void
    {
        $model = new ModelsGalleryCategory();
        $this->data = ['categories' => $model->getAllCategories()];
        $this->publicView('gallerycategory/view', 'User');
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
            $model = new ModelsGalleryCategory();
            if ($model->insertCategory($_POST['name'])) {
                header("Location: /gallerycategory");
                exit;
            } else {
                echo "Error: Could not insert category.";
            }
        }

        $this->publicView('gallerycategory/create', 'User');
    }
}
