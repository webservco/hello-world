<?php
namespace Project\Domain\Blog;

trait BlogControllerTrait
{
    abstract protected function request();
    
    protected function getData()
    {
        return [
            'app' => [
                'url' => $this->request()->getAppUrl(),
            ],
            'strings' => [
                'title' => 'Hello Blog!',
                'description' => 'Sample App for the WebServCo PHP Framework',
            ]
        ];
    }
}
