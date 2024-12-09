<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit015d62a72796b1d39847d48edb6ebd3c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit015d62a72796b1d39847d48edb6ebd3c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit015d62a72796b1d39847d48edb6ebd3c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit015d62a72796b1d39847d48edb6ebd3c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
