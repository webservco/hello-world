<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

class Controller extends \WebServCo\Framework\AbstractController
{
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
    
    final protected function config()
    {
        return Fw::getLibrary('Config');
    }
    
    final protected function request()
    {
        return Fw::getLibrary('Request');
    }
}
