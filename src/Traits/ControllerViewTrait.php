<?php
namespace Project\Traits;

trait ControllerViewTrait
{
    abstract public function data($key, $defaultValue = false);
    abstract protected function setData($key, $value);

    protected function initViews($namespace)
    {
        $parts = explode('\\', $namespace);
        $this->setData('dir/views', strtolower((string) end($parts)));
    }

    protected function getView($templateName)
    {
        return sprintf('%s/%s', $this->data('dir/views'), $templateName);
    }
}
