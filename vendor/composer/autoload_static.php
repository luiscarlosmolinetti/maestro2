<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb4ffacaf60fcf4d42328ffb3fac5f4d
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slug' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/slug.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitcb4ffacaf60fcf4d42328ffb3fac5f4d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
