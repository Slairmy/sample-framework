<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fd416001a9a3c0f589433d704cda8e1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'H' => 
        array (
            'Hyf\\SampleFramework\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Hyf\\SampleFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Hyf\\SampleFramework\\DI\\SimpleContainer' => __DIR__ . '/../..' . '/src/DI/SimpleContainer.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fd416001a9a3c0f589433d704cda8e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fd416001a9a3c0f589433d704cda8e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fd416001a9a3c0f589433d704cda8e1::$classMap;

        }, null, ClassLoader::class);
    }
}