<?php
namespace Project\Domain\HelloWorld;

use WebServCo\Framework\Settings as S;

final class HelloWorldCommand extends \Project\Controller
{
    public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                $this->config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
            )
        );
    }
    
    public function hello($name = null)
    {
        $this->outputCli("Hello ", false);
        $this->outputCli(isset($name) ? $name : 'World');
        return new \WebServCo\Framework\Libraries\CliResponse();
    }
}
