<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cab92bd3ac65b1d92c43626ae5b85d4
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'allan\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'allan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cab92bd3ac65b1d92c43626ae5b85d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cab92bd3ac65b1d92c43626ae5b85d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
