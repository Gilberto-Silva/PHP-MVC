<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc96a9cdf3a1096a8badbb7f0628a867f
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

        spl_autoload_register(array('ComposerAutoloaderInitc96a9cdf3a1096a8badbb7f0628a867f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc96a9cdf3a1096a8badbb7f0628a867f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc96a9cdf3a1096a8badbb7f0628a867f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
