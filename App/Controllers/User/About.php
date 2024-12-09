<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class About extends Controller
{
    public function view(): void
    {
        $this->publicView('about/view', 'User');
    }
}
