<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4603f5d1d1a591a2c9d873b5b48ddff7
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\Iframe\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\Iframe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\IframePlugin' => __DIR__ . '/../..' . '/iframe.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4603f5d1d1a591a2c9d873b5b48ddff7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4603f5d1d1a591a2c9d873b5b48ddff7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4603f5d1d1a591a2c9d873b5b48ddff7::$classMap;

        }, null, ClassLoader::class);
    }
}
