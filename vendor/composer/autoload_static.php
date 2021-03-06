<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ad2dfca6f4601303b8ea7dc4e8ec685
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sbecker11\\HelloWorld\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sbecker11\\HelloWorld\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ad2dfca6f4601303b8ea7dc4e8ec685::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ad2dfca6f4601303b8ea7dc4e8ec685::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ad2dfca6f4601303b8ea7dc4e8ec685::$classMap;

        }, null, ClassLoader::class);
    }
}
