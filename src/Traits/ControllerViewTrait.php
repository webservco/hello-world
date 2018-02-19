<?php
namespace Project\Traits;

trait ControllerViewTrait
{
    protected $viewsDir;
    
    protected function initViews($namespace)
    {
        $parts = explode('\\', $namespace);
        $this->viewsDir = strtolower(end($parts));
    }
    
    protected function getView($templateName)
    {
        return sprintf('%s/%s', $this->viewsDir, $templateName);
    }
}
