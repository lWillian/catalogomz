<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb33bdeff372243eb4b2ee90675cdcf51
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../traits',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../models',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb33bdeff372243eb4b2ee90675cdcf51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb33bdeff372243eb4b2ee90675cdcf51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb33bdeff372243eb4b2ee90675cdcf51::$classMap;

        }, null, ClassLoader::class);
    }
}
