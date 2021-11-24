<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf700461e2e0f4d2bbab258ddb0a7d86a
{
    public static $files = array (
        '073b0c2a9ffd63c6361706c5f29aaa29' => __DIR__ . '/../..' . '/source/Support/Config.php',
        'f27cb7adcad029fb01592aab4f12956d' => __DIR__ . '/../..' . '/source/Support/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf700461e2e0f4d2bbab258ddb0a7d86a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf700461e2e0f4d2bbab258ddb0a7d86a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf700461e2e0f4d2bbab258ddb0a7d86a::$classMap;

        }, null, ClassLoader::class);
    }
}
