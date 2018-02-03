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
    
    public function json($data, $status = true)
    {
        $data = [
            'status' => true,
            'data' => $data,
        ];
        return parent::json($data);
    }
    
    public function write($string, $eol = true)
    {
        return parent::write($string, $eol);
    }
}
