<?php
namespace Project;

use WebServCo\Framework\Framework as Fw;

final class OutputLoader extends \WebServCo\Framework\AbstractOutputLoader
{
    public function __construct($projectPath)
    {
        parent::__construct(
            $projectPath,
            Fw::getLibrary('HtmlOutput'),
            Fw::getLibrary('JsonOutput')
        );
    }
    
    public function html($data, $template)
    {
        return parent::html($data, $template);
    }
    
    public function htmlPage($data, $pageTemplate, $mainTemplate = null)
    {
        return parent::htmlPage($data, $pageTemplate, $mainTemplate);
    }
    
    public function json($data)
    {
        return parent::json($data);
    }
}
