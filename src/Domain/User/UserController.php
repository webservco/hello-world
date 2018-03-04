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

        $form = new UserLoginForm();

        if ($form->isSent() && $form->isValid()) {
            //var_dump($form->toArray()); //XXX
            echo 'NOWHAT';
            return; //XXX
        }

        $this->setData('form', $form->toArray());

        return $this->outputHtml($this->getData(), $this->getView(__FUNCTION__));
    }
}
