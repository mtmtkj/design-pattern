<?php

namespace DesignPatternsExample\Singleton;

class Configuration
{
    private static $instance;

    private $properties = [];

    private function __construct()
    {
    }

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new Configuration();
        }
        return self::$instance;
    }

    public function setProperty($key, $value)
    {
        $this->properties[$key] = $value;
    }

    public function getProperty($key)
    {
        return (array_key_exists($key, $this->properties)) ? $this->properties[$key] : null;
    }
}
