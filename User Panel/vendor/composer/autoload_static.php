<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69d5641a97ca8191eaea3ecdc8c11d89
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kichaiAdmin\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kichaiAdmin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69d5641a97ca8191eaea3ecdc8c11d89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69d5641a97ca8191eaea3ecdc8c11d89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69d5641a97ca8191eaea3ecdc8c11d89::$classMap;

        }, null, ClassLoader::class);
    }
}
