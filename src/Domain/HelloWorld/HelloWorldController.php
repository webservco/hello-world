<?php
namespace Project\Domain\HelloWorld;

use WebServCo\Framework\Settings as S;

final class HelloWorldController extends \Project\Controller
{
    public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                $this->config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
            )
        );
    }
    
    public function hello($json = false)
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Hello World!',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        if ($json) {
            return new \WebServCo\Framework\Libraries\HttpResponse(
                $this->output()->json($data),
                200,
                ['Content-Type' => 'application/json']
            );
        } else {
            return new \WebServCo\Framework\Libraries\HttpResponse(
                $this->output()->htmlPage($data, 'hello'),
                200,
                ['Content-Type' => 'text/html']
            );
        }
    }
    
    public function foo()
    {
        echo __CLASS__ . ' ' . __METHOD__;
    }
    
    public function bar()
    {
        echo __CLASS__ . ' ' . __METHOD__;
    }
}
