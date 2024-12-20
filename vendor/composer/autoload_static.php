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
        'App\\Controllers\\Admin\\GalleryCategory' => __DIR__ . '/../..' . '/App/Controllers/Admin/GalleryCategory.php',
        'App\\Controllers\\Admin\\Main' => __DIR__ . '/../..' . '/App/Controllers/Admin/Main.php',
        'App\\Controllers\\Admin\\Post' => __DIR__ . '/../..' . '/App/Controllers/Admin/Post.php',
        'App\\Controllers\\Admin\\PostCategory' => __DIR__ . '/../..' . '/App/Controllers/Admin/PostCategory.php',
        'App\\Controllers\\Admin\\User' => __DIR__ . '/../..' . '/App/Controllers/Admin/User.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/App/Controllers/Controller.php',
        'App\\Controllers\\User\\About' => __DIR__ . '/../..' . '/App/Controllers/User/About.php',
        'App\\Controllers\\User\\Error' => __DIR__ . '/../..' . '/App/Controllers/User/Error.php',
        'App\\Controllers\\User\\Gallery' => __DIR__ . '/../..' . '/App/Controllers/User/Gallery.php',
        'App\\Controllers\\User\\Main' => __DIR__ . '/../..' . '/App/Controllers/User/Main.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'App\\Core\\Viewer' => __DIR__ . '/../..' . '/App/Core/Viewer.php',
        'App\\Models\\Gallery' => __DIR__ . '/../..' . '/App/Models/Gallery.php',
        'App\\Models\\GalleryCategory' => __DIR__ . '/../..' . '/App/Models/GalleryCategory.php',
        'App\\Models\\Post' => __DIR__ . '/../..' . '/App/Models/Post.php',
        'App\\Models\\PostCategory' => __DIR__ . '/../..' . '/App/Models/PostCategory.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/App/Models/User.php',
        'App\\orm\\Connector' => __DIR__ . '/../..' . '/App/orm/Connector.php',
        'App\\orm\\Insert' => __DIR__ . '/../..' . '/App/orm/Insert.php',
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
