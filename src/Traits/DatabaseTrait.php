<?php
namespace Project\Traits;

trait DatabaseTrait
{
    final protected function db()
    {
        return $this->mysqlPdoDb();
    }

    final protected function extraDb()
    {
        return \WebServCo\Framework\Framework::library(
            'MysqlPdoDatabase', //className
            'ExtraPdoDatabase', //storageKey
            'extraDatabase' //configName
        );
    }
}
