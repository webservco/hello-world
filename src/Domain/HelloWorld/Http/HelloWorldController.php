<?php
namespace Project\Domain\HelloWorld;

use WebServCo\Framework\Framework as Fw;

final class HelloWorldController extends \WebServCo\Framework\AbstractController
{
    final public function hello($simplified = false)
    {
        echo $simplified ? 'Hi!' : 'Hello World!';
    }
    
    final public function foo()
    {
        echo __CLASS__ . ' ' . __METHOD__;
    }
    
    final public function bar()
    {
        echo __CLASS__ . ' ' . __METHOD__;
    }
}
