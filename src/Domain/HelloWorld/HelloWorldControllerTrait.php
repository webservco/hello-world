<?php
namespace Project\Domain\HelloWorld;

trait HelloWorldControllerTrait
{
    protected function getResultString($result)
    {
        ob_start();
        var_dump($result);
        return ob_get_clean();
    }
}
