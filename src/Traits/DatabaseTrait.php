<?php
namespace Project\Traits;

trait DatabaseTrait
{
    final protected function db()
    {
        return $this->pdoDb();
    }

    final protected function extraDb()
    {
        return \WebServCo\Framework\Framework::library(
            'PdoDatabase', //className
            'ExtraPdoDatabase', //storageKey
            'extraDatabase' //configName
        );
    }
}
