<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0df6b04c9e1ec934fc7c57f079d6bab
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0df6b04c9e1ec934fc7c57f079d6bab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0df6b04c9e1ec934fc7c57f079d6bab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
