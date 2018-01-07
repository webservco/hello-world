<?php
namespace Project\Domain\Blog\Http;

use WebServCo\Framework\Framework as Fw;
use WebServCo\Framework\Settings as S;

final class BlogController extends \Project\Controller
{
    final public function __construct()
    {
        parent::__construct(
            new \Project\OutputLoader(
                Fw::config()->get(sprintf('app%1$spath%1$sproject', S::DIVIDER))
            )
        );
    }
    
    final public function posts()
    {
        $data = [];
        $data['strings'] = [
            'title' => 'Hello World!',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        echo $this->output()->html($data, 'Blog/posts');
    }
    
    final public function post($id)
    {
        $data = [];
        $data['id'] = $id;
        $data['strings'] = [
            'title' => 'Hello World!',
            'description' => 'Sample App for the WebServCo PHP Framework',
        ];
        
        echo $this->output()->html($data, 'Blog/post');
    }
}
