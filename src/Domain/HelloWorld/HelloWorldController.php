<?php
namespace Project\Domain\HelloWorld;

use WebServCo\Framework\Settings as S;

final class HelloWorldController extends \Project\Controller
{
    const SESSION_KEY = 'message';
    
    public function __construct()
    {
        $projectPath = $this->config()->get(
            sprintf('app%1$spath%1$sproject', S::DIVIDER)
        );
        
        parent::__construct(
            new \Project\OutputLoader($projectPath)
        );
        
        $this->session()->start($projectPath . 'var/sessions');
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
            return $this->outputJson($data);
        } else {
            return $this->outputHtml($data, __FUNCTION__);
        }
    }
    
    public function helloResponse()
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Hello World!',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        /**
         * Same thing as calling
         * return $this->outputHtml($data, 'hello');
         */
        return new \WebServCo\Framework\Libraries\HttpResponse(
            $this->output()->htmlPage($data, 'hello', null),
            200,
            ['Content-Type' => 'text/html']
        );
    }
    
    public function sessionSet()
    {
        $oldValue = $this->session()->get(self::SESSION_KEY);
        $value = 'Hello World';
        $this->session()->set(self::SESSION_KEY, $value);
        
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Hello World!',
            'result' => sprintf(
                'Key "%s" has been set to value "%s".',
                self::SESSION_KEY,
                $value
            ) . ' '. sprintf('Old value was "%s"', $oldValue),
        ];
        
        return $this->outputHtml($data, 'session');
    }
    
    public function sessionUnset()
    {
        $value = $this->session()->get(self::SESSION_KEY);
        //TODO Check if session has key (implement session()->has())
        //$this->session()->remove(self::SESSION_KEY);
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Hello World!',
            'result' => sprintf(
                'The value of key "%s" was "%s".',
                self::SESSION_KEY,
                $value
            ) . ' The key has been removed',
        ];
        
        return $this->outputHtml($data, 'session');
    }
}
