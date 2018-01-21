<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

class Repository extends \WebServCo\Framework\AbstractRepository
{
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
    
    final protected function pdoDb()
    {
        return Fw::getLibrary('PdoDatabase');
    }
    
    final protected function mysqliDb()
    {
        return Fw::getLibrary('MysqliDatabase');
    }
    
    final protected function extraDb()
    {
        return Fw::getLibrary('PdoDatabase', 'ExtraPdoDatabase', 'extraDatabase');
    }
    
    final protected function db()
    {
        return $this->pdoDb();
    }
}
