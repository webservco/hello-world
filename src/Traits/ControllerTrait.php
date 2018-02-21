<?php
namespace Project\Traits;

trait ControllerTrait
{
    use ControllerViewTrait;
    use ControllerI18nTrait;
    use ControllerMetaTrait;
    
    abstract protected function i18n();
    abstract protected function request();
    
    protected function getData($action)
    {
        return [
            'app' => [
                'url' => $this->request()->getAppUrl(),
            ],
            'meta' => $this->getMeta($action),
            'lang' => $this->i18n()->getLanguage(),
            'langs' => $this->i18n()->getLanguages(),
        ];
    }
}
