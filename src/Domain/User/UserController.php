<?php
namespace Project\Domain\User;

/*
IMPORTANT:
This system is deprecated.
TODO: implement User system from Ingraduland.
*/

final class UserController extends \Project\AbstractController
{
    protected $repository;

    use UserControllerTrait;

    public function __construct()
    {
        parent::__construct(__NAMESPACE__);

        $this->repository = new UserRepository($this->outputLoader);
    }

    public function register()
    {
        $this->init(__FUNCTION__);

        if ($this->session()->get('user/id')) {
            return $this->getRedirectResponse('me', true /* addSuffix*/);
        }

        $form = new UserRegisterForm();

        if ($form->isSent() && $form->isValid()) {
            $userId = $this->user()->add(
                $form->data('name'),
                $form->data('email'),
                $form->data('password')
            );
            $this->user()->login(
                $form->data('email'),
                $form->data('password'),
                true /* remember */
            );
            return $this->userLoginRedirect();
        }

        $this->setData('form', $form->toArray());

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }

    public function login()
    {
        $this->init(__FUNCTION__);

        if ($this->session()->get('user/id')) {
            return $this->getRedirectResponse('me', true /* addSuffix*/);
        }

        $form = new UserLoginForm();

        if ($form->isSent() && $form->isValid()) {
            return $this->userLoginRedirect();
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

        return $this->getRedirectResponse('User/login', true /* addSuffix*/);
    }

    public function account()
    {
        $this->init(__FUNCTION__);

        if (!$this->session()->get('user/id')) {
            return $this->getRedirectResponse('User/login', true /* addSuffix*/);
        }

        $this->setData('user/name', $this->session()->get('user/info/name'));

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }
}
