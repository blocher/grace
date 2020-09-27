<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc338f7fbd7d73a58c836a6fc15bad979
{
    public static $files = array (
        '0d5072bb3af3f8dc141e158c7699adf2' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SiteGround_Optimizer\\' => 21,
        ),
        'C' => 
        array (
            'CharlesRumley\\Tests\\' => 20,
            'CharlesRumley\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SiteGround_Optimizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'CharlesRumley\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/tests',
        ),
        'CharlesRumley\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sepia' => 
            array (
                0 => __DIR__ . '/..' . '/sepia/po-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc338f7fbd7d73a58c836a6fc15bad979::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc338f7fbd7d73a58c836a6fc15bad979::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc338f7fbd7d73a58c836a6fc15bad979::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc338f7fbd7d73a58c836a6fc15bad979::$classMap;

        }, null, ClassLoader::class);
    }
}
