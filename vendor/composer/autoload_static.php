<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite49d37c59554df155f34ed1319cc5547
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite49d37c59554df155f34ed1319cc5547::$classMap;

        }, null, ClassLoader::class);
    }
}
