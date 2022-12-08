<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b92b836c618a89642f1c68047f4362b
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Reply\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Reply\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Reply\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'Reply\\Models\\CommentModel' => __DIR__ . '/../..' . '/src/Models/CommentModel.php',
        'Reply\\Models\\PostModel' => __DIR__ . '/../..' . '/src/Models/PostModel.php',
        'Reply\\Models\\ReplyModel' => __DIR__ . '/../..' . '/src/Models/ReplyModel.php',
        'Reply\\Template' => __DIR__ . '/../..' . '/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b92b836c618a89642f1c68047f4362b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b92b836c618a89642f1c68047f4362b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b92b836c618a89642f1c68047f4362b::$classMap;

        }, null, ClassLoader::class);
    }
}
