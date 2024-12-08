<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class Gallery extends Controller
{
    public function view(): void
    {
        $this->publicView('gallery/view', 'Admin');
    }
}
