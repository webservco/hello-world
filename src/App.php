<?php
namespace Project;

class App extends \WebServCo\Framework\Application
{
    public function __construct($pathPublic, $pathProject = null)
    {
        /**
         * Project can be located in a completely different place
         * than the web directory.
         */
        $pathProject = $pathProject ?: realpath(__DIR__ . '/..');
        
        parent::__construct($pathPublic, $pathProject);
    }

    /**
     * Handle HTTP errors.
     */
    protected function haltHttp($errorInfo = [])
    {
        return parent::haltHttp($errorInfo);
    }

    /**
     * Handle CLI errors
     */
    protected function haltCli($errorInfo = [])
    {
        return parent::haltCli($errorInfo);
    }
}
