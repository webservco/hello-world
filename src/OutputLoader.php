<?php
namespace Project;

class OutputLoader extends \WebServCo\Framework\OutputLoader
{
    public function html($data, $template)
    {
        return parent::html($data, $template);
    }
    
    public function json($data)
    {
        return parent::json($data);
    }
}
