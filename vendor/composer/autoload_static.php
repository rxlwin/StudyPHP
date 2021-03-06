<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6159e4ac89ecbea17b44005dfb3c7a2
{
    public static $files = array (
        '862f49fe50450f35c924abd8e8f5f38c' => __DIR__ . '/..' . '/renxiaolong/tools/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rxlwin\\tools\\params\\' => 20,
            'rxlwin\\tools\\arr\\' => 17,
            'rxlwin\\tools\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rxlwin\\tools\\params\\' => 
        array (
            0 => __DIR__ . '/..' . '/renxiaolong/tools/params',
        ),
        'rxlwin\\tools\\arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/renxiaolong/tools/arr',
        ),
        'rxlwin\\tools\\' => 
        array (
            0 => __DIR__ . '/..' . '/renxiaolong/tools',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6159e4ac89ecbea17b44005dfb3c7a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6159e4ac89ecbea17b44005dfb3c7a2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
