<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64daedf0c49630dbf625a6721a3f4ddc
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\App\\' => 11,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64daedf0c49630dbf625a6721a3f4ddc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64daedf0c49630dbf625a6721a3f4ddc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit64daedf0c49630dbf625a6721a3f4ddc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit64daedf0c49630dbf625a6721a3f4ddc::$classMap;

        }, null, ClassLoader::class);
    }
}
