<?php
namespace Project\Domain\Blog;

use WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    protected $repository;
    
    use BlogControllerTrait;
    
    public function __construct()
    {
        parent::__construct(__NAMESPACE__);
        
        $this->repository = new BlogRepository($this->outputLoader);
    }
    
    public function posts()
    {
        $data = $this->getData(__FUNCTION__);
        
        $data['posts'] = $this->repository->getAll();
        
        return $this->outputHtml($data, $this->getView(__FUNCTION__));
    }
    
    public function post($id)
    {
        $data = $this->getData(__FUNCTION__);
        
        $data['id'] = $id;
        
        return $this->outputHtml($data, $this->getView(__FUNCTION__));
    }
    
    public function test()
    {
        echo '<pre>';
        
        //var_dump($this->repository->update());
        
        //var_dump($this->repository->getTitle());
        //var_dump($this->repository->getOne());
        //var_dump($this->repository->getSome());
        
        //var_dump($this->repository->getAll());
        //var_dump($this->repository->countAll());
        
        //var_dump($this->repository->transaction());
        
        //var_dump($this->repository->clear());
        //var_dump($this->repository->addMultiple());
        var_dump($this->repository->add());
        
        //var_dump($this->repository->delete(42));
        //var_dump($this->repository->test2());
        //var_dump($this->repository->test3());
        exit;
        
        //$data['posts'] = $this->XXX->getLatest();
    }
}
