<?php
namespace Project\Domain\HelloWorld\Http;

use WebServCo\Framework\Framework as Fw;
use WebServCo\Framework\Settings as S;

final class HelloWorldController extends \Project\Controller
{
    final public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                Fw::config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
            )
        );
        
        /**
         * Further initialization
         * eg
         * $this->model = new HelloWorld;
         * $this->database = ...
         */
    }
    
    final public function hello($json = false)
    {
        $data = [];
        $data['strings'] = [
            'title' => 'Hello World!',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        if ($json) {
            echo $this->output()->json($data);  
        } else {
            echo $this->output()->html($data, 'hello');
        }
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
