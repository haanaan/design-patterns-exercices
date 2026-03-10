<?php
require('../vendor/autoload.php');

use App\Config;

$config1 = Config::getInstance();

echo "Debug : " . ($config1->get('debug') ? 'true' : 'false') . "<br>";
echo "API Key : " . $config1->get('apiKey') . "<br>";
echo "DB Host : " . $config1->get('db')['host'] . "<br>";

$config2 = Config::getInstance();

echo "\nLes deux instances sont identiques : " . ($config1 === $config2 ? 'oui' : 'non') . "<br>";