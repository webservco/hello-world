<?php

namespace Project;

class App extends \WebServCo\Framework\Application
{
    public function __construct($pathPublic, $pathProject = null)
    {
        /**
         * Project can be located in a completely different place.
         */
        $pathProject = $pathProject ?: realpath(__DIR__ . '/..');
        
        parent::__construct($pathPublic, $pathProject);
    }
}
