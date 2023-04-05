<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f305e0b7a1ffac3a044f688b68b3f7f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iago\\Fabricainfo\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iago\\Fabricainfo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f305e0b7a1ffac3a044f688b68b3f7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f305e0b7a1ffac3a044f688b68b3f7f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f305e0b7a1ffac3a044f688b68b3f7f::$classMap;

        }, null, ClassLoader::class);
    }
}
