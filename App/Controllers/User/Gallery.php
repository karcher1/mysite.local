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
                'name' => $_POST['name'] ?? null,
                'image' => $_POST['image'] ?? null,
                'category_id' => $_POST['category_id'] ?? null,
            ];

            // Проверка на наличие всех данных
            if (empty($data['name']) || empty($data['image']) || empty($data['category_id'])) {
                die('All fields are required');
            }

            $model = new GalleryModel;
            $model->insertGallery($data);

            header('Location: /gallery');
            exit();
        }

        $this->publicView('gallery/create', 'User');
    }

    public function update(): void
    {
        $this->publicView('gallery/update', 'User');
    }

    public function delete(): void
    {
        $this->publicView('gallery/delete', 'User');
    }
}
