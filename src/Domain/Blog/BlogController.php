<?php
namespace Project\Domain\Blog;

use \WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    protected $repository;
    
    public function __construct()
    {
        $outputLoader = new \Project\OutputLoader(
            $this->config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
        );
        parent::__construct($outputLoader);
        
        $this->repository = new \Project\Domain\Blog\BlogRepository($outputLoader);
    }
    
    public function posts()
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['strings'] = [
            'title' => 'Blog',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        $data['posts'] = $this->repository->getAll();
        
        /* XXX return new Response()? //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
         * Resposne method:
         * - set status code (default 200)
         * - echo output
         * return new HttpResponse implements Response($output, 200); //data, $httpCode
         * or to set headers etc:
         * $response = new HttpResponse(null, null);
         * $response->setHeader($..);
         * $response->setContent($..);
         * $response->setStatusCode($..);
         * return $response;
         * XXX SET CONTENT TYPE (html, json)
         */
        
        echo $this->output()->htmlPage($data, 'Blog/posts');
    }
    
    public function post($id)
    {
        $data = [];
        $data['app']['url'] = $this->request()->guessAppUrl();
        $data['id'] = $id;
        $data['strings'] = [
            'title' => 'Blog post',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        echo $this->output()->htmlPage($data, 'Blog/post');
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
