<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function view(): void
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getAllUsers()];
        $this->publicView('user/view', 'Admin');
    }

    public function create(): void
    {
        echo 'Create method for Admin User';
    }

    public function update(): void
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getUserById($_GET['id'] ?? 0)];
        $this->publicView('user/update', 'Admin');
    }

    public function delete(): void
    {
        echo 'Delete method for Admin User';
    }
}
