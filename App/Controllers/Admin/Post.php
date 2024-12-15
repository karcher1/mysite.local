<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function view(): void
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getAllPosts()];
        $this->publicView('post/view', 'Admin');
    }

    public function create(): void
    {
        echo 'Create method for Admin Post';
    }

    public function update(): void
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getPostById($_GET['id'] ?? 0)];
        $this->publicView('post/update', 'Admin');
    }

    public function delete(): void
    {
        echo 'Delete method for Admin Post';
    }
}
