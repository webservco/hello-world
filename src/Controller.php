<?php
namespace Project;

class Controller extends \WebServCo\Framework\AbstractController
{
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
    
    public function getResultString($result)
    {
        ob_start();
        var_dump($result);
        return ob_get_clean();
    }
}
