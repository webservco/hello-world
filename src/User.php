<?php
namespace Project;

final class User extends \WebServCo\Framework\AbstractUser
{
    use \WebServCo\Framework\Traits\ExposeLibrariesTrait;
    use \Project\Traits\DatabaseTrait;

    protected function getHash($email, $password)
    {
        return $this->security()->getHash(
            $password,
            $this->security()->getSalt($email)
        );
    }

    public function login($email, $password, $remember)
    {
        $hash = $this->getHash($email, $password);

        $info = $this->db()->getRow(
            "SELECT id, email, status, level FROM acl_users WHERE email = ? AND hash = ? LIMIT 1",
            [$email, $hash]
        );

        if (!$info) { //login error (email, password)
            $this->setData('error', self::ERR_LOGIN);
            return false;
        }

        if (empty($info['status'])) { //user is disabled
            $this->setData('error', self::ERR_DISABLED);
            return false;
        }

        $this->setData('info', $info);

        return true;
    }
}
