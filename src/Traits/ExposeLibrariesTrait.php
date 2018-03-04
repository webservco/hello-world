<?php
namespace Project\Traits;

trait ExposeLibrariesTrait
{
    public function user()
    {
        return \WebServCo\Framework\Framework::projectLibrary('User');
    }
}
