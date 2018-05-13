<?php

declare(strict_types=1);

use Keboola\Component\UserException;
use MyComponent\Component;

require __DIR__ . '/../vendor/autoload.php';

try {
    //throw new InvalidArgumentException("suicide 3");
    var_export(json_decode(file_get_contents('/data/config.json')), true);
    $app = new Component();
    $app->run();
    exit(0);
} catch (UserException $e) {
    echo $e->getMessage();
    exit(1);
} catch (Throwable $e) {
    fwrite(STDERR, get_class($e) . ':' . $e->getMessage());
    fwrite(STDERR, "\nFile: " . $e->getFile());
    fwrite(STDERR, "\nLine: " . $e->getLine());
    fwrite(STDERR, "\nCode: " . $e->getCode());
    fwrite(STDERR, "\nTrace: " . $e->getTraceAsString() . "\n");
    exit(2);
}
