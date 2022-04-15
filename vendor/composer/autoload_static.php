<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec9e2914cc1a02d0469099f6bb83a565
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'plsr\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'plsr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec9e2914cc1a02d0469099f6bb83a565::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec9e2914cc1a02d0469099f6bb83a565::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec9e2914cc1a02d0469099f6bb83a565::$classMap;

        }, null, ClassLoader::class);
    }
}
