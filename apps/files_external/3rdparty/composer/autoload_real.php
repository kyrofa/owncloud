<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit98fe9b281934250b3a93f69a5ce843b3
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit98fe9b281934250b3a93f69a5ce843b3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit98fe9b281934250b3a93f69a5ce843b3', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}
