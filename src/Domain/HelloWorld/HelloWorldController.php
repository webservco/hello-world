<?php
namespace Project\Domain\HelloWorld;

use WebServCo\Framework\Settings as S;

final class HelloWorldController extends \Project\Controller
{
    const SESSION_KEY = 'foo';
    const COOKIE_NAME = 'foo';
    
    use \Project\Traits\HelloWorldControllerTrait;
    
    public function __construct()
    {
        $projectPath = $this->config()->get(
            sprintf('app%1$spath%1$sproject', S::DIVIDER)
        );
        
        parent::__construct(
            new \Project\OutputLoader($projectPath)
        );
        
        $this->session()->start($projectPath . 'var/sessions');
    }
    
    public function hello($json = false)
    {
        $data = $this->getData();
        
        if ($json) {
            return $this->outputJson($data);
        } else {
            return $this->outputHtml($data, __FUNCTION__);
        }
    }
    
    public function helloResponse()
    {
        $data = $this->getData();
        
        /**
         * Same thing as calling
         * return $this->outputHtml($data, 'hello');
         */
        return new \WebServCo\Framework\Libraries\HttpResponse(
            $this->output()->htmlPage($data, 'hello', null),
            200,
            ['Content-Type' => 'text/html']
        );
    }
    
    public function sessions($action = null)
    {
        $data = $this->getData();
        
        switch ($action) {
            case 'set':
                $data['strings']['title'] = 'Set session value';
                $result = $this->session()->set(self::SESSION_KEY, 'bar');
                break;
            case 'remove':
                $data['strings']['title'] = 'Remove session value';
                try {
                    if ($this->session()->has(self::SESSION_KEY)) {
                        $result = $this->session()->remove(self::SESSION_KEY);
                        break;
                    } 
                    $result = false;
                } catch (\WebServCo\Framework\Exceptions\ArrayStorageException $e) {
                    $result = $e->getMessage();
                }
                
                break;
            case 'get':
            default:
                $data['strings']['title'] = 'Get session value';
                $result = $this->session()->get(self::SESSION_KEY);
                break;
        }
        
        $resultString = $this->getResultString($result);
        
        $data['strings']['message'] = sprintf('The result is: %s', $resultString);
        
        return $this->outputHtml($data, __FUNCTION__);
    }
    
    public function cookies($action = null)
    {
        $data = $this->getData();
        
        switch ($action) {
            case 'set':
                $data['strings']['title'] = 'Set cookie';
                $result = $this->cookie()->set(self::COOKIE_NAME, 'bar');
                break;
            case 'remove':
                $data['strings']['title'] = 'Remove cookie';
                $result = $this->cookie()->remove(self::COOKIE_NAME);
                break;
            case 'get':
            default:
                $data['strings']['title'] = 'Get cookie';
                $result = $this->cookie()->get(self::COOKIE_NAME);
                break;
        }
        
        $resultString = $this->getResultString($result);
        
        $data['strings']['message'] = sprintf('The result is: %s', $resultString);
        
        return $this->outputHtml($data, __FUNCTION__);
    }
}
