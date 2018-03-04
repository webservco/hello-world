<?php
namespace Project\Domain\User;

trait UserControllerTrait
{
    abstract protected function redirect($location, $addSuffix = true);
    abstract protected function session();
    abstract protected function user();

    final protected function userLoginRedirect()
    {
        $this->session()->regenerate();
        $this->session()->set('user/id', $this->user()->data('info/id'));
        $this->session()->set('user/info', $this->user()->data('info'));
        return $this->redirect('me', true /* addSuffix*/);
    }
}
