<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf8aefdd8c9f516bf4c51b4af5cd4a965
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf8aefdd8c9f516bf4c51b4af5cd4a965', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf8aefdd8c9f516bf4c51b4af5cd4a965', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf8aefdd8c9f516bf4c51b4af5cd4a965::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
