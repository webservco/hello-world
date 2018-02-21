<?php
namespace Project;

abstract class AbstractController extends \WebServCo\Framework\AbstractController
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
        
        $this->initViews($namespace);
        $this->initI18n();
    }
}
