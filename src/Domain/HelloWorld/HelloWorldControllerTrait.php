<?php
namespace Project\Domain\HelloWorld;

trait HelloWorldControllerTrait
{
    abstract protected function request();
    
    protected function getData()
    {
        return [
            'app' => [
                'url' => $this->request()->guessAppUrl(),
            ],
            'strings' => [
                'title' => 'Hello World!',
                'description' => 'Sample App for the WebServCo PHP Framework',
            ]
        ];
    }
}
