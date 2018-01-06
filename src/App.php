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
     * Run app (HTTP)
     */
    public function runHttp()
    {
        return parent::runHttp();
    }
    
    /**
     * Run app (CLI)
     */
    public function runCli()
    {
        return parent::runCli();
    }

    /**
     * Handle HTTP errors.
     */
    public function haltHttp($errorInfo = [])
    {
        return parent::haltHttp($errorInfo);
    }

    /**
     * Handle CLI errors
     */
    public function haltCli($errorInfo = [])
    {
        return parent::haltCli($errorInfo);
    }
}
