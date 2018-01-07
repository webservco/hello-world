<?php
namespace Project\Domain\HelloWorld\Http;

use WebServCo\Framework\Framework as Fw;

final class HelloWorldController extends \WebServCo\Framework\AbstractController
{
    public function __construct()
    {
        parent::__construct(new \Project\OutputLoader);
    }
    
    final public function hello($simplified = false)
    {
        //echo $simplified ? 'Hi!' : 'Hello World!';
        
        //optionally set main template
        
        $data['title'] = 'Hello World!';
        
        //$this->output()->html($data, $template);
        //Fw::output->html($data, $template);
        //or
        echo $this->output()->json($data);
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
