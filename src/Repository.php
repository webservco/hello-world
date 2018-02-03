<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

class Repository extends \WebServCo\Framework\AbstractRepository
{
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
    
    final protected function db()
    {
        return $this->pdoDb();
    }
    
    final protected function extraDb()
    {
        return Fw::getLibrary('PdoDatabase', 'ExtraPdoDatabase', 'extraDatabase');
    }
}
