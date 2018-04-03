<?php
namespace Project\Traits;

trait ControllerI18nTrait
{
    abstract protected function i18n();
    abstract protected function request();
    abstract protected function session();
    abstract protected function setData($key, $value);

    protected function initI18n()
    {
        $this->checkLanguage();
        $this->setData('i18n/lang', $this->i18n()->getLanguage());
        $this->setData('i18n/langs', $this->i18n()->getLanguages());
    }

    protected function checkLanguage()
    {
        /**
         * Get language set by session.
         */
        $lang = $this->session()->get('i18n/language');

        $this->i18n()->init($this->data('path/project'), $lang);

        /**
         * Check switch request.
         */
        $requestLang = $this->request()->query('lang');
        if (!empty($requestLang)) {
            return $this->setLanguage($requestLang);
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
        $lang = $this->i18n()->getLanguage();

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
        return true;
    }
}
