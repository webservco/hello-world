<?php
namespace Project;

class Controller extends \WebServCo\Framework\AbstractController
{
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
    
    final protected function request()
    {
        return Fw::getLibrary('Request', [$_SERVER, $_POST]);
    }
}
