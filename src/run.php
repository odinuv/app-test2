<?php

declare(strict_types=1);

use Keboola\Component\Logger;
use Keboola\Component\UserException;
use Symfony\Component\Filesystem\Filesystem;

require __DIR__ . '/../vendor/autoload.php';

$logger = new Logger();
try {
    $logger->info("first Executing query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archiveExecuting query 'instalment_archive'Exporting to in.c-daily_rep_workflow.daily_rep_workflow_instalment_archive");
    sleep(1);
    $logger->warn("warning");
    sleep(1);
    $logger->error("error");
    sleep(1);
    $logger->info("second");
    $fs = new FileSystem();
    $fs->copy('/data/config.json', '/data/out/state.json');
    //throw new ApplicationException("suicide 2");
    $app = new MyComponent\Component($logger);
    $app->run();
    exit(0);
} catch (UserException $e) {
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