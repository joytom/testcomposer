<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17691114dff71d3945ef162431cc395
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chuang\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chuang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/chuang',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc17691114dff71d3945ef162431cc395::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc17691114dff71d3945ef162431cc395::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
