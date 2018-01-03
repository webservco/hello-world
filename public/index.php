<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Project\App(__DIR__);
$app->start();
$app->run();
$app->stop();

exit;
