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
                'help' => [],
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

        if (!filter_var($this->data('email'), \FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'][] = __('Email is not valid');
        }

        if (!empty($this->errors)) {
            return false;
        }

        $result = $this->user()->login(
            $this->data('email'),
            $this->data('password'),
            $this->data('remember')
        );

        if (!$result) {
            switch ($this->user()->data('error')) {
                case $this->user()::ERR_DISABLED:
                    $this->errors['email'][] = __('This account is disabled');
                    break;
                case $this->user()::ERR_LOGIN:
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
