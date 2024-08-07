<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef8ebfc62caa64c17fab9c3d22c51380
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef8ebfc62caa64c17fab9c3d22c51380::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef8ebfc62caa64c17fab9c3d22c51380::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
