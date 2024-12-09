<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class Gallery extends Controller
{
    public function view(): void
    {
        $this->publicView('gallery/view', 'User');
    }
}
