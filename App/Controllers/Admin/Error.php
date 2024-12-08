<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class Error extends Controller
{
    public function view(): void
    {
        $this->publicView('error/view', 'Admin');
    }
}
