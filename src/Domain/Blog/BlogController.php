<?php
namespace Project\Domain\Blog;

use WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    protected $repository;
    
    use \Project\Traits\BlogControllerTrait;
    
    public function __construct()
    {
        $projectPath = $this->config()->get(
            sprintf('app%1$spath%1$sproject', S::DIVIDER)
        );
        
        $outputLoader = new \Project\OutputLoader($projectPath);
        
        parent::__construct($outputLoader);
        
        $this->repository = new \Project\Domain\Blog\BlogRepository($outputLoader);
        
        $this->session()->start($projectPath . 'var/sessions');
    }
    
    public function posts()
    {
        $data = $this->getData();
        
        $data['posts'] = $this->repository->getAll();
        
        return $this->outputHtml($data, 'Blog/' . __FUNCTION__);
    }
    
    public function post($id)
    {
        $data = $this->getData();
        
        $data['id'] = $id;
        $data['strings']['title'] = 'Blog post';
        
        return $this->outputHtml($data, 'Blog/' . __FUNCTION__);
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
