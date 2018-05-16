<?php

declare(strict_types=1);

use Keboola\Component\Logger;

require __DIR__ . '/../vendor/autoload.php';

$logger = new Logger();
try {
    $logger->info("first");
    sleep(1);
    $logger->warn("warning");
    sleep(1);
    $logger->error("error");
    sleep(1);
    $logger->info("second");
    throw new Exception("suicide 2");
    $app = new MyComponent\Component($logger);
    $app->run();
    exit(0);
} catch (\Keboola\Component\UserException $e) {
    $logger->error($e->getMessage());
    exit(1);
} catch (\Throwable $e) {
    $logger->critical(
        get_class($e) . ':' . $e->getMessage(),
        [
            'errFile' => $e->getFile(),
            'errLine' => $e->getLine(),
            'errCode' => $e->getCode(),
            'errTrace' => $e->getTraceAsString(),
            'errPrevious' => $e->getPrevious() ? get_class($e->getPrevious()) : '',
        ]
    );
    exit(2);
}