<?php
namespace Project\Traits;

trait ControllerTrait
{
    use ControllerViewTrait;
    
    abstract protected function initI18n();
    
    abstract protected function setLanguage($lang);
}
