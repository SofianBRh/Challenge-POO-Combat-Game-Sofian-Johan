<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2db377f7b3aeef803e465e25cb988512
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brhaiberh\\BriefPoo\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brhaiberh\\BriefPoo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2db377f7b3aeef803e465e25cb988512::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2db377f7b3aeef803e465e25cb988512::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2db377f7b3aeef803e465e25cb988512::$classMap;

        }, null, ClassLoader::class);
    }
}
