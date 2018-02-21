<?php
namespace Project\Traits;

trait ControllerI18nTrait
{
    abstract protected function request();
    abstract protected function session();
    
    protected function initI18n()
    {
        /**
         * Get language set by session.
         */
        $lang = $this->session()->get('i18n/language');
        
        $this->i18n()->init($this->projectPath, $lang);
        
        /**
         * Check switch request.
         */
        if (!empty($this->request()->query('lang'))) {
            return $this->setLanguage($this->request()->query('lang'));
        }
        
        /**
         * Check if language is already set by session
         */
        if ($lang) {
            return false;
        }
        
        /**
         * Default if not previously set.
         */
        $lang = $this->i18n()->GetLanguage();
        
        /**
         * Check browser accept language.
         */
        $acceptLanguage = $this->request()->getAcceptLanguage();
        if (!empty($acceptLanguage)) {
            $lang = $acceptLanguage;
        }
        
        /**
         * Set language
         */
        return $this->setLanguage($lang);
    }
    
    protected function setLanguage($lang)
    {
        $this->session()->set('i18n/language', $lang);
        $this->i18n()->setLanguage($lang);
        return false;
    }
}
