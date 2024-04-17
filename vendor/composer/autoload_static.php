<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd0a9b5bea0e596fffd10d1df32d7272
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lideres\\RavenPhp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lideres\\RavenPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd0a9b5bea0e596fffd10d1df32d7272::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd0a9b5bea0e596fffd10d1df32d7272::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd0a9b5bea0e596fffd10d1df32d7272::$classMap;

        }, null, ClassLoader::class);
    }
}
