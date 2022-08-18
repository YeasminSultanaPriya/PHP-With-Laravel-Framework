<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bc1f545b08078155aaa2022f664de64
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bc1f545b08078155aaa2022f664de64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bc1f545b08078155aaa2022f664de64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bc1f545b08078155aaa2022f664de64::$classMap;

        }, null, ClassLoader::class);
    }
}