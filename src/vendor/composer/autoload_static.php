<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb827c74709351673e6c89540960fa195
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dwesgram\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dwesgram\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb827c74709351673e6c89540960fa195::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb827c74709351673e6c89540960fa195::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb827c74709351673e6c89540960fa195::$classMap;

        }, null, ClassLoader::class);
    }
}
