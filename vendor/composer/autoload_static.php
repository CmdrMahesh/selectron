<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3133ebb019418bfcf7b9093b18516c84
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sp\\selectron\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sp\\selectron\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3133ebb019418bfcf7b9093b18516c84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3133ebb019418bfcf7b9093b18516c84::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
