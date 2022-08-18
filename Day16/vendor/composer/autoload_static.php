<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16634a9028a4c1770eb414aa25da927c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16634a9028a4c1770eb414aa25da927c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16634a9028a4c1770eb414aa25da927c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16634a9028a4c1770eb414aa25da927c::$classMap;

        }, null, ClassLoader::class);
    }
}