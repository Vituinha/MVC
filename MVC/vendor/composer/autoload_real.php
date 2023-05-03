<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit523bc859d33f5e30e7e10bed80bcf2da
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

        spl_autoload_register(array('ComposerAutoloaderInit523bc859d33f5e30e7e10bed80bcf2da', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit523bc859d33f5e30e7e10bed80bcf2da', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit523bc859d33f5e30e7e10bed80bcf2da::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
