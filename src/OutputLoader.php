<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

class OutputLoader extends \WebServCo\Framework\AbstractOutputLoader
{
    public function __construct($projectPath)
    {
        parent::__construct($projectPath);
    }
    
    protected function htmlOutput()
    {
        return Fw::getLibrary('HtmlOutput');
    }
    
    protected function jsonOutput()
    {
        return Fw::getLibrary('JsonOutput');
    }
    
    public function html($data, $pageTemplate, $mainTemplate = null)
    {
        return parent::html($data, $pageTemplate, $mainTemplate);
    }
    
    public function json($data)
    {
        return parent::json($data);
    }
}
