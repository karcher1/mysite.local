<?php

namespace App\Core;

class Viewer
{
    private array $data = [];

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function includePublicTemplate(string $partName, string $zone): void
    {
        extract($this->data);
        $filePath = __DIR__ . '/../../public/Parts/' . $zone . '/' . $partName . '.php';

        if (file_exists($filePath)) {
            include $filePath;
        } else {
            echo "<p>Template not found: {$filePath}</p>";
        }
    }

    public function includeAdminTemplate(string $partName, string $zone): void
    {
        extract($this->data);
        $filePath = __DIR__ . '/../../public/Parts/' . $zone . '/' . $partName . '/index.php';

        if (file_exists($filePath)) {
            include $filePath;
        } else {
            echo "<p>Template not found: {$filePath}</p>";
        }
    }

}
