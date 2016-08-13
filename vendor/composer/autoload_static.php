<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite683464b5cec39ae49a5498ccdbf67e5
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gravatalonga\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gravatalonga\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite683464b5cec39ae49a5498ccdbf67e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite683464b5cec39ae49a5498ccdbf67e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}