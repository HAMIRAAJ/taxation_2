<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita6a7ddf000ac8d6fd6432e484b2f656d
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

        spl_autoload_register(array('ComposerAutoloaderInita6a7ddf000ac8d6fd6432e484b2f656d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita6a7ddf000ac8d6fd6432e484b2f656d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita6a7ddf000ac8d6fd6432e484b2f656d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
