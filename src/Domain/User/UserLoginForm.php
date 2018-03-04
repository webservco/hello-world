<?php
namespace Project\Domain\User;

final class UserLoginForm extends \Project\AbstractForm
{
    public function __construct($defaultData = [])
    {
        parent::__construct(
            [
                'meta' => [
                    'email' => __('Email Address'),
                    'password' => __('Password'),
                    'remember' => __('Remember me'),
                ],
                'help' => [
                    'email' => __('We\'ll never share your email with anyone else.'),
                ],
                'required' => [
                    'email',
                    'password',
                ],
                'trim' => [
                    'email',
                    'password',
                ],
            ],
            $defaultData
        );
    }

    protected function validate()
    {
        parent::validate();

        if (!empty($this->errors)) {
            return false;
        }

        $user = new \Project\User();

        $result = $user->login(
            $this->data('email'),
            $this->data('password'),
            $this->data('remember')
        );

        if (!$result) {
            $error = $user->data('error');
            switch ($error) {
                case $user::ERR_DISABLED:
                    $this->errors['email'][] = __('This account is disabled');
                    break;
                case $user::ERR_LOGIN:
                default:
                    $this->errors['email'][] = __('Login error, please check credentials');
                    break;
            }
        }

        if (!empty($this->errors)) {
            return false;
        }

        return true;
    }
}
