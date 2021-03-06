<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bf9d06a9a5fedcb38918ece135dfdde
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ImageOptim\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ImageOptim\\' => 
        array (
            0 => __DIR__ . '/..' . '/imageoptim/imageoptim/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bf9d06a9a5fedcb38918ece135dfdde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bf9d06a9a5fedcb38918ece135dfdde::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
