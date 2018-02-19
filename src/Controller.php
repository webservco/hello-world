<?php
namespace Project;

class Controller extends \WebServCo\Framework\AbstractController
{
    protected $projectPath;
    
    protected $repository;
    
    use \Project\Traits\ControllerTrait;
    
    public function __construct($namespace)
    {
        $this->projectPath = $this->config()->get('app/path/project');
        
        $outputLoader = new \Project\OutputLoader($this->projectPath);
        parent::__construct($outputLoader);
        
        $this->session()->start($this->projectPath . 'var/sessions');
        
        //$this->query = $this->request()->getQuery();
        
        $this->initViews($namespace);
        //$this->initI18n();
        
        //XXX
    }
    
    public function getResultString($result)
    {
        ob_start();
        var_dump($result);
        return ob_get_clean();
    }
}
