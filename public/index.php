<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * Initialize app.
 *
 * Parameter is the web accessible project directory path
 * (if missing trailing slash will be added during processing).
 */
$app = new \Project\App(__DIR__);
$app->start();
$app->run();
$app->stop();

exit;
