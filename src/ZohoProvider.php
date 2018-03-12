<?php namespace ConnectGrid\ZohoApi\Provider;

use League\OAuth2\Client\Entity\User;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;

class Zoho extends AbstractProvider
{
    public $scopeSeparator = ' ';
    public $testMode = false;
    public $scopes = ['profile','payments:widget','payments:shipping_address'];

    public function __construct($options = [])
    {
        parent::__construct($options);

        if (isset($options['testMode'])) {
            $this->testMode = $options['testMode'];
        }
    }

    public function urlAuthorize()
    {
        return 'https://accounts.zoho.com/oauth/v2/auth';
    }

    public function urlAccessToken()
    {
        return ($this->testMode) ? 'https://accounts.zoho.com/oauth/v2/token' : 'https://accounts.zoho.com/oauth/v2/token';
    }

    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        $url = ($this->testMode) ? 'https://accounts.zoho.com/oauth/user/info' : 'https://accounts.zoho.com/oauth/user/info';
        return $url . '?access_token=' . $token;
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        $user = new User();

        $user->exchangeArray([
            'uid'   => isset($response->user_id) ? $response->user_id : null,
            'name'  => isset($response->name) ? $response->name : null,
            'email' => isset($response->email) ? $response->email : null
        ]);

        return $user;
    }

    public function userUid($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return isset($response->user_id) ? $response->user_id : null;
    }

    public function getAuthorizationUrl($options = [])
    {
        $url = parent::getAuthorizationUrl($options);

        if ($this->testMode) {
            $url .= '&sandbox=true';
        }

        return $url;
    }
}
