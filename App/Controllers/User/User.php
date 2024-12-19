<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function view(): void
    {
        $model = new UserModel();
        $this->data = ['users' => $model->getAllUsers()];
        $this->publicView('user/view', 'User');
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            ];
            $model = new UserModel();
            $model->insertUser($data);

            header('Location: /user');
            exit();
        }

        $this->publicView('user/create', 'User');
    }

    public function update(): void
    {
        echo "update method";
    }

    public function delete(): void
    {
        echo "delete method";
    }
}
