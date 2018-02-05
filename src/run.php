<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use Keboola\MyApplication\Exception\UserException;
use Keboola\MyApplication\Application;

require __DIR__ . '/../vendor/autoload.php';

$dataDir = getenv('KBC_DATADIR') === false ? '/data/' : getenv('KBC_DATADIR');
$configPath = $dataDir . 'config.json';
$config = new \Keboola\MyApplication\Config($configPath);

try {
    $client = new Client();
    $app = new Application($config, $dataDir);
    $app->run();
    exit(0);
} catch (UserException $e) {
    echo $e->getMessage();
    exit(1);
}
