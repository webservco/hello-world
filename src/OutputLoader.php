<?php
namespace Project;

class OutputLoader extends \WebServCo\Framework\OutputLoader
{
    public function html($data, $pageTemplate, $mainTemplate = null)
    {
        return parent::html($data, $pageTemplate, $mainTemplate);
    }
    
    public function json($data)
    {
        return parent::json($data);
    }
}
