<?php
namespace Project\Traits;

trait ControllerTrait
{
    abstract public function data($key, $defaultValue = false);
    abstract protected function initDomain();
    abstract protected function initMeta($action);
    abstract protected function setData($key, $value);
    
    protected function initPaths()
    {
        $this->setData('path', $this->config()->get('app/path'));
        $this->setData('url/app', $this->request()->getAppUrl());
        $this->setData('url/lang', $this->request()->getUrl(['lang']));
    }
    
    /**
     * Called (optionally) by each method.
     */
    protected function init($action)
    {
        $this->initMeta($action);
        $this->initDomain();
    }
}
