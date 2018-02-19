<?php
namespace Project\Traits;

trait ControllerTrait
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
    
    abstract protected function initI18n();
    
    abstract protected function setLanguage($lang);
}
