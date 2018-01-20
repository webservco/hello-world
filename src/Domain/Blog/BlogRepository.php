<?php

namespace Project\Domain\Blog;

class BlogRepository extends \Project\Repository
{
    public function test1()
    {
        return $this->db()->setting('credentials');
    }
    
    public function test2()
    {
        return $this->anotherDb()->setting('credentials');
    }
    
    public function test3()
    {
        return $this->db2()->setting('credentials');
    }
    
    public function getLatest()
    {
        //XXX
        return $this->db()->retrieve($stuff, $table, $conditions);
    }
}
