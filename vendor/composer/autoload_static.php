<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc24c7dc3ea261cb5f8871feb596ff906
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/kzykhys/git/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc24c7dc3ea261cb5f8871feb596ff906::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc24c7dc3ea261cb5f8871feb596ff906::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInitc24c7dc3ea261cb5f8871feb596ff906::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
