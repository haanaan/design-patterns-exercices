<?php

# TODO: Créer une classe Config en Singleton

namespace App;

final class Config
{
    private static ?Config $instance = null;
    private static array $settings = [];

    private function __construct()
    {
        self::$settings = require __DIR__ . '/../config/config.php';
    }

    public static function getInstance(): Config
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        return self::$settings[$key] ?? null;
    }

    private function __clone() {}
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}