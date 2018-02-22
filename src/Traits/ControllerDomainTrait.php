<?php
namespace Project\Traits;

trait ControllerDomainTrait
{
    abstract protected function config();
    abstract public function data($key, $defaultValue = false);
    abstract protected function setData($key, $value);
    
    protected function initDomain()
    {
    }
}
