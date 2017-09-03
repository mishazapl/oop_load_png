<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2627fb808ce3a6d96f87540282aacfe8
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'liw\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'liw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2627fb808ce3a6d96f87540282aacfe8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2627fb808ce3a6d96f87540282aacfe8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}