<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bdc0995736302ae762105634ef0b027
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/yaml',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1bdc0995736302ae762105634ef0b027::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
