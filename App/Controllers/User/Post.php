<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function view(): void
    {
        $model = new PostModel();
        $this->data = ['posts' => $model->getAllPosts()];
        $this->publicView('post/view', 'User');
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['content'])) {
            $model = new PostModel();
            if ($model->insertPost($_POST['title'], $_POST['content'])) {
                header("Location: /post");
                exit;
            } else {
                echo "Error: Could not insert post.";
            }
        }

        $this->publicView('post/create', 'User');
    }
}
