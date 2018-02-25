<?php
namespace Project;

abstract class AbstractForm extends \WebServCo\Framework\AbstractForm
{
    use \Project\Traits\RepositoryDatabaseTrait;
    
    protected function filter()
    {
        foreach ($this->setting('trim', []) as $item) {
            $this->setData($item, trim($this->data($item)));
        }
        return true;
    }
    
    protected function validate()
    {
        foreach ($this->setting('required', []) as $item) {
            if (empty($this->data($item))) {
                $this->errors[$item][] = sprintf(__('This field is mandatory: %s'), $this->setting('meta/'.$item));
            }
        }
    }
}
