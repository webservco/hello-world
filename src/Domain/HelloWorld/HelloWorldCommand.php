<?php
namespace Project\Domain\HelloWorld;

final class HelloWorldCommand extends \Project\AbstractController
{
    public function __construct()
    {
        parent::__construct(__NAMESPACE__);
    }

    public function hello($name = null)
    {
        $this->outputCli("Hello ", false);
        $this->outputCli(isset($name) ? $name : 'World');
        return new \WebServCo\Framework\Cli\Response();
    }
}
