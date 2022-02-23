<?php

namespace Codielabs\Auth\Config;

use CodeIgniter\Model;
use Codielabs\Auth\Config\Auth as AuthConfig;
use Config\Services as BaseService;

class Services extends BaseService
{
	public static function authentication(string $lib = 'Codielabs\Auth\Authentication\LocalAuthenticator', bool $getShared = true)
	{
		if ($getShared)
		{
			return self::getSharedInstance('authentication', $lib);
		}
	}
}
