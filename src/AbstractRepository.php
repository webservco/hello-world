<?php
namespace Project;

abstract class AbstractRepository extends \WebServCo\Framework\AbstractRepository
{
    use \Project\Traits\RepositoryTrait;
    
    public function __construct($outputLoader)
    {
        parent::__construct($outputLoader);
    }
}
