<?php

declare(strict_types=1);

use Keboola\Component\UserException;
use MyComponent\Component;

require __DIR__ . '/../vendor/autoload.php';

try {
    echo "some message";
    fwrite(STDERR, "\nrandom error somewhere");
    echo "another message";
    throw new UserException("suicide 2");
    $app = new Component();
    $app->run();
    exit(0);
} catch (UserException $e) {
    fwrite(STDERR, $e->getMessage());
    exit(1);
} catch (Throwable $e) {
    fwrite(STDERR, get_class($e) . ':' . $e->getMessage());
    fwrite(STDERR, "\nFile: " . $e->getFile());
    fwrite(STDERR, "\nLine: " . $e->getLine());
    fwrite(STDERR, "\nCode: " . $e->getCode());
    fwrite(STDERR, "\nTrace: " . $e->getTraceAsString() . "\n");
    exit(2);
}
