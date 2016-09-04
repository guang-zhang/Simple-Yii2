<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2472334ca0af7d89f7ea09622dcb82bf
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2472334ca0af7d89f7ea09622dcb82bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2472334ca0af7d89f7ea09622dcb82bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}