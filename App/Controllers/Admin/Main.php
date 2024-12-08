<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class Main extends Controller
{
    public function index(): void
    {
        $this->data = [
            'test' => 'Main',
            'test1' => 'About',
        ];
        $this->adminView();
    }
}