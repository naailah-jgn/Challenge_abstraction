<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6128c2161b7ec65cad0bc9a50fe182d
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NaailahJugon\\ChallengeAbstraction\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NaailahJugon\\ChallengeAbstraction\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6128c2161b7ec65cad0bc9a50fe182d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6128c2161b7ec65cad0bc9a50fe182d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6128c2161b7ec65cad0bc9a50fe182d::$classMap;

        }, null, ClassLoader::class);
    }
}
