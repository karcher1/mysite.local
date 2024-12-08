<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class About extends Controller
{
    public function view(): void
    {
        $this->publicView('about/view', 'Admin');
    }
}
