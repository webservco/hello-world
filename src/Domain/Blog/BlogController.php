<?php
namespace Project\Domain\Blog;

use WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    protected $repository;
    
    final public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                $this->config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
            )
        );
        
        $this->repository = new \Project\Domain\Blog\BlogRepository();
    }
    
    final public function posts()
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Blog',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        var_dump($this->repository->test1());
        var_dump($this->repository->test2());
        var_dump($this->repository->test3());
        exit;
        
        //$data['posts'] = $this->XXX->getLatest();
        
        //XXX return new Response()?
        echo $this->output()->html($data, 'Blog/posts');
    }
    
    final public function post($id)
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['id'] = $id;
        $data['strings'] = [
            'title' => 'Blog post',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        echo $this->output()->html($data, 'Blog/post');
    }
}
