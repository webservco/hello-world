<?php
namespace Project\Domain\HelloWorld;

final class HelloWorldController extends \Project\AbstractController
{
    const SESSION_KEY = 'foo';
    const COOKIE_NAME = 'foo';

    use HelloWorldControllerTrait;

    public function __construct()
    {
        parent::__construct(__NAMESPACE__);
    }

    public function hello($json = false)
    {
        $this->init(__FUNCTION__);

        if ($json) {
            return $this->outputJson($this->getData());
        } else {
            return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
        }
    }

    public function helloResponse()
    {
        $this->init(__FUNCTION__);

        /**
         * Same thing as calling
         * return $this->outputHtml($this->getData(), 'hello');
         */
        return new \WebServCo\Framework\HttpResponse(
            $this->output()->htmlPage($this->getData(), $this->getView('hello'), null),
            200,
            ['Content-Type' => 'text/html']
        );
    }

    public function sessions($action = null)
    {
        $this->init(__FUNCTION__);

        switch ($action) {
            case 'set':
                $this->setData('meta/title', __('Set session value'));
                $result = $this->session()->set(self::SESSION_KEY, 'bar');
                break;
            case 'remove':
                $this->setData('meta/title', __('Remove session value'));
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
                $this->setData('meta/title', __('Get session value'));
                $result = $this->session()->get(self::SESSION_KEY);
                break;
        }

        $resultString = $this->getResultString($result);

        $this->setData('meta/message', sprintf(__('The result is: %s'), $resultString));

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }

    public function cookies($action = null)
    {
        $this->init(__FUNCTION__);

        switch ($action) {
            case 'set':
                $this->setData('meta/title', __('Set cookie'));
                $result = $this->cookie()->set(self::COOKIE_NAME, 'bar');
                break;
            case 'remove':
                $this->setData('meta/title', __('Remove cookie'));
                $result = $this->cookie()->remove(self::COOKIE_NAME);
                break;
            case 'get':
            default:
                $this->setData('meta/title', __('Get cookie'));
                $result = $this->cookie()->get(self::COOKIE_NAME);
                break;
        }

        $resultString = $this->getResultString($result);

        $this->setData('meta/message', sprintf(__('The result is: %s'), $resultString));

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }
}
