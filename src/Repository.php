<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

class Repository extends \WebServCo\Framework\AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }
    
    final protected function db()
    {
        return Fw::getLibrary('PdoDatabase');
    }
    
    final protected function anotherDb()
    {
        return Fw::getLibrary('PdoDatabase', 'PdoDatabaseAnother', 'PdoDatabaseAnotherConfig');
    }
    
    final protected function db2()
    {
        return Fw::getLibrary('MysqliDatabase');
    }
}
