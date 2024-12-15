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
        echo 'create method for user';
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
