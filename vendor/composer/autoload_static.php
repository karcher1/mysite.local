<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit015d62a72796b1d39847d48edb6ebd3c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Admin\\About' => __DIR__ . '/../..' . '/App/Controllers/Admin/About.php',
        'App\\Controllers\\Admin\\Error' => __DIR__ . '/../..' . '/App/Controllers/Admin/Error.php',
        'App\\Controllers\\Admin\\Gallery' => __DIR__ . '/../..' . '/App/Controllers/Admin/Gallery.php',
        'App\\Controllers\\Admin\\Main' => __DIR__ . '/../..' . '/App/Controllers/Admin/Main.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/App/Controllers/Controller.php',
        'App\\Controllers\\User\\About' => __DIR__ . '/../..' . '/App/Controllers/User/About.php',
        'App\\Controllers\\User\\Error' => __DIR__ . '/../..' . '/App/Controllers/User/Error.php',
        'App\\Controllers\\User\\Gallery' => __DIR__ . '/../..' . '/App/Controllers/User/Gallery.php',
        'App\\Controllers\\User\\Main' => __DIR__ . '/../..' . '/App/Controllers/User/Main.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'App\\Core\\Viewer' => __DIR__ . '/../..' . '/App/Core/Viewer.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit015d62a72796b1d39847d48edb6ebd3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit015d62a72796b1d39847d48edb6ebd3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit015d62a72796b1d39847d48edb6ebd3c::$classMap;

        }, null, ClassLoader::class);
    }
}
