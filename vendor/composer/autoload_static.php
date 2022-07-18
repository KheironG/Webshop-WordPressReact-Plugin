<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71fc9993712c2e79c292e6a7bbcf2526
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71fc9993712c2e79c292e6a7bbcf2526::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71fc9993712c2e79c292e6a7bbcf2526::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
