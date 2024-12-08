<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class Error extends Controller
{
    public function view(): void
    {
        $this->publicView('Error/view', 'User');
    }
}
