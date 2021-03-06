<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fc33fbee59088ab62b7a97b1dbb04d4
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Emarref\\Jwt\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Emarref\\Jwt\\' => 
        array (
            0 => __DIR__ . '/..' . '/emarref/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fc33fbee59088ab62b7a97b1dbb04d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fc33fbee59088ab62b7a97b1dbb04d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
