<?php
namespace Project\Traits;

trait ControllerMetaTrait
{
    abstract protected function getMeta($action);
    abstract protected function setData($key, $value);
    
    protected function initMeta($action)
    {
        $this->setData('meta', $this->getMeta($action));
    }
}
