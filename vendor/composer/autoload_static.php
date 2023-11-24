<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaf82020af328118f66ecc77857a19c8
{
    public static $files = array (
        'c52d1999593b4e86e35397cfc651c4d4' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ToDoList\\System\\' => 16,
            'ToDoList\\Source\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ToDoList\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'ToDoList\\Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaf82020af328118f66ecc77857a19c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaf82020af328118f66ecc77857a19c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaf82020af328118f66ecc77857a19c8::$classMap;

        }, null, ClassLoader::class);
    }
}
