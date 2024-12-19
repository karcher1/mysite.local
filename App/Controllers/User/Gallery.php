<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function view(): void
    {
        $model = new GalleryModel();
        $this->data = ['data' =>$model->getAllGallery()];
        $this->publicView('gallery/view', 'User');
    }
    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                $_POST['name'],
                $_POST['image'],
                (int)$_POST['category_id'],
            ];

            $model = new GalleryModel();

            try {
                $model->insertGallery($data);
                header("Location: /gallery");
                exit();
            } catch (\Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $this->publicView('gallery/create', 'User');
        }
    }

    public function update(): void
    {
        $model = new GalleryModel();
        $this->data = ['data' =>$model->getOneGallery($_GET['id'])];
        $this->publicView('gallery/update', 'User');
    }

    public function delete(): void
    {
        $this->publicView('gallery/delete', 'User');
    }
}
