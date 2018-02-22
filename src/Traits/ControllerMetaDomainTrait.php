<?php
namespace Project\Traits;

trait ControllerMetaDomainTrait
{
    protected function getMeta($action)
    {
        switch ($action) {
            case 'posts':
                return $this->getBlogPostsMeta();
                break;
            case 'post':
                return $this->getBlogPostMeta();
                break;
            default:
                return $this->getDefaultMeta();
                break;
        }
    }
    
    protected function getDefaultMeta()
    {
        return [
            'title' => __('Hello World!'),
            'description' => __('Sample App for the WebServCo PHP Framework'),
        ];
    }
    
    protected function getBlogPostsMeta()
    {
        return [
            'title' => __('Blog'),
            'description' => __('Sample App for the WebServCo PHP Framework'),
        ];
    }
    
    protected function getBlogPostMeta()
    {
        return [
            'title' => __('Blog post'),
            'description' => __('Sample App for the WebServCo PHP Framework'),
        ];
    }
}
