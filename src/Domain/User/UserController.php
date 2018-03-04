<?php
namespace Project\Domain\User;

final class UserController extends \Project\AbstractController
{
    protected $repository;

    public function __construct()
    {
        parent::__construct(__NAMESPACE__);

        $this->repository = new UserRepository($this->outputLoader);
    }

    public function login()
    {
        $this->init(__FUNCTION__);

        if ($this->session()->get('user/id')) {
            return $this->redirect('me', true /* addSuffix*/);
        }

        $form = new UserLoginForm();

        if ($form->isSent() && $form->isValid()) {
            $this->session()->regenerate();
            $this->session()->set('user/id', $this->user()->data('info/id'));
            $this->session()->set('user/info', $this->user()->data('info'));

            return $this->redirect('me', true /* addSuffix*/);
        }

        if ($form->isSent() && !$form->isValid()) {
            $this->session()->regenerate();
        }

        $this->setData('form', $form->toArray());

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }

    public function logout()
    {
        $this->init(__FUNCTION__);

        $this->session()->destroy();

        return $this->redirect('User/login', true /* addSuffix*/);
    }

    public function account()
    {
        $this->init(__FUNCTION__);

        if (!$this->session()->get('user/id')) {
            return $this->redirect('User/login', true /* addSuffix*/);
        }

        $this->setData('user/name', $this->session()->get('user/info/name'));

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }
}
