<?php

namespace Codielabs\Auth\Authentication;

use CodeIgniter\Router\Exceptions\RedirectException;

class LocalAuthenticator extends AuthenticationBase implements AuthenticatorInterface
{
    public function attempt()
    {
        echo "Local Authenticator - Attempt";
        $this->login();
    }
}
