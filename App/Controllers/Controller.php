<?php

namespace App\Controllers;

use App\Core\Viewer;

class Controller
{
    protected array $data = [];

    public function publicView(string $partName = 'main', string $zone = 'User'): void
    {
        $viewer = new Viewer();
        $viewer->setData($this->data);
        $viewer->includePublicTemplate($partName, $zone);
    }

    public function adminView(string $partName = 'main', string $zone = 'Admin'): void
    {
        $viewer = new Viewer();
        $viewer->setData($this->data);
        $viewer->includeAdminTemplate($partName, $zone);
    }
}
