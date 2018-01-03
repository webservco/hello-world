<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * Initialize app.
 *
 * Parameter is the web accessible project directory path
 * (make sure to add the trailing slash).
 */
$app = new \Project\App(__DIR__.'/');
//$app = new \Project\App(null);
$app->start();
$app->run();
$app->stop();

exit;
