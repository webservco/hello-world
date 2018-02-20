<?php
namespace Project\Domain\HelloWorld;

trait HelloWorldControllerTrait
{
    abstract protected function request();
    
    protected function getData()
    {
        return [
            'app' => [
                'url' => $this->request()->getAppUrl(),
            ],
            'strings' => [
                'title' => 'Hello World!',
                'description' => 'Sample App for the WebServCo PHP Framework',
            ]
        ];
    }
    
    public function getResultString($result)
    {
        ob_start();
        var_dump($result);
        return ob_get_clean();
    }
}
