<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62a9e5e5c7e2c3fa58a95c8fe0a6c0d5
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'M' => 
        array (
            'Microsoft\\Graph\\' => 16,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'B' => 
        array (
            'Beta\\Microsoft\\Graph\\' => 21,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Microsoft\\Graph\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/microsoft-graph/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Beta\\Microsoft\\Graph\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/microsoft-graph/src/Beta/Microsoft/Graph',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/eCommerce_Site',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62a9e5e5c7e2c3fa58a95c8fe0a6c0d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62a9e5e5c7e2c3fa58a95c8fe0a6c0d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62a9e5e5c7e2c3fa58a95c8fe0a6c0d5::$classMap;

        }, null, ClassLoader::class);
    }
}
