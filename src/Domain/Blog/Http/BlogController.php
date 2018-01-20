<?php
namespace Project\Domain\Blog\Http;

use WebServCo\Framework\Framework as Fw;
use WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    protected $repository;
    
    final public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                Fw::config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
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
