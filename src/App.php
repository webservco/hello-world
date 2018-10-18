<?php
namespace Project;

final class App extends \WebServCo\Framework\Application
{
    public function __construct($pathPublic, $pathProject = null)
    {
        /**
         * Project can be located in a completely different place
         * than the web directory.
         */
        $pathProject = $pathProject ?: realpath($pathPublic . '/..');

        parent::__construct($pathPublic, $pathProject, __NAMESPACE__);
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
