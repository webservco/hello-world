<?php
namespace Project\Domain\User;

final class UserRegisterForm extends \Project\AbstractForm
{
    public function __construct($defaultData = [])
    {
        parent::__construct(
            [
                'meta' => [
                    'name' => __('Name'),
                    'email' => __('Email Address'),
                    'password' => __('Password'),
                ],
                'help' => [
                    'name' => __('Your full name.'),
                    'email' => __('We\'ll never share your email with anyone else.'),
                ],
                'required' => [
                    'name',
                    'email',
                    'password',
                ],
                'trim' => [
                    'name',
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

        if ($this->user()->emailExists($this->data('email'))) {
            $this->errors['email'][] = __('Email is already registered');
        }

        if (!empty($this->errors)) {
            return false;
        }

        return true;
    }
}
