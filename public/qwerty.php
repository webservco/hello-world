<?php
require __DIR__ . '/../vendor/autoload.php';

/*
use WebServCo\Framework\Framework as Fw;
var_dump(Fw::getPath());
exit;
*/

/**
 * Initialize app.
 *
 * Parameter is the web accessible project directory path
 * (if missing trailing slash will be added during processing).
 */
//$app = new \Project\App(__DIR__);
//$app->start();
////hello();
//$app->run();

//use WebServCo\Framework\Framework as Fw;
/*
try {
    throw new \ErrorException('test');
} catch (\ErrorException $e) {
    $app->handleErrorException($e);
}
*/

/*
$cfg = ['suffixes' => ['.htm','.html'],];
$request = new WebServCo\Framework\Libraries\Request($cfg, $_SERVER);
echo '<pre>';
//print_r($_SERVER);
echo PHP_EOL;
var_dump($request->custom);
echo PHP_EOL;
var_dump($request->query);
echo PHP_EOL;
*/
//var_dump(WebServCo\Framework\Framework::request());
//var_dump(WebServCo\Framework\Framework::request()->query);



/*
$cfg = [
            'default_route' => ['Content', 'home', ['foo', 'bar']],
            'routes' => [
                'blog/({any})/({num})' => 'Blog/article/$2',
                'qwerty' => 'Content/debugSomething/foo/bar',
            ],
        ];
$router = new WebServCo\Framework\Libraries\Router($cfg);

$cfg = ['suffixes' => ['.htm','.html'],];
$request = new WebServCo\Framework\Libraries\Request($cfg, $_SERVER);
*/

//echo '<pre>';
//var_dump($router->getRoute($request->target, $router->setting('routes')));
//var_dump($request->query);

/*
use WebServCo\Framework\Framework as Fw;
echo '<pre>';
//print_r(Fw::request()->server);
var_dump(Fw::request()->method);
var_dump(Fw::router()->getRoute(Fw::request()->target, Fw::router()->setting('routes')));
var_dump(Fw::request()->target);
var_dump(Fw::request()->query);
echo PHP_EOL;
*/


/**
 * Optional
 */
//$app->shutdown();

exit;
