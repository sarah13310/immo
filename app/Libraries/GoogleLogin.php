<?php

namespace App\Libraries;

use Config\GoogleConfig;
use Google\Client;
use Google\Service\Oauth2;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;


class GoogleLogin
{
    protected $client;
    protected $helper;
    protected $auth;
    protected $url_redirect;

    public function __construct(GoogleConfig $config = null)
    {
        if ($config != null) {
            $this->client = new \Google_Client();
            $this->client->setClientId($config->app_id);
            $this->client->setClientSecret($config->app_secret);
            $this->client->setRedirectUri($config->url_redirect);
            $this->client->addScope("email");
            $this->client->addScope("profile");
            $this->url_redirect = $config->url_redirect;
        } else {
            $this->client = new \Google_Client();
            $this->client->setClientId("670023878960-jrfveill0d6ietpvfmf6h3ui8m5ukrks.apps.googleusercontent.com");
            $this->client->setClientSecret("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");
            $this->client->setRedirectUri("http://localhost:8080/google/auth");
            $this->client->addScope("email");
            $this->client->addScope("profile");
            $this->url_redirect = base_url() . 'google/auth';
        }
        //

    }

    // Générer l'URL de connexion Facebook
    public function getLoginUrl()
    {
        $this->auth = $this->client->createAuthUrl();
        return $this->auth;
    }

    // Récupérer le jeton d'accès Facebook à partir de la réponse de connexion
    public function getAccessToken($var)
    {
        $accessToken = $this->client->fetchAccessTokenWithAuthCode($var);
        return $accessToken;
    }

    // Récupérer les informations utilisateur à partir de l'API Facebook
    public function getUserProfile($accessToken = null)
    {
        $this->client->setAccessToken($accessToken['access_token']);
        $google_service = new OAuth2($this->client);
        $user = $google_service->userinfo->get();
        return $user;
    }

    public function setState($state)
    {
        if ($state) {

            $this->helper->getPersistentDataHandler()->set('state', $state);
        }
    }

    public function setDefaultAccessToken($token)
    {
        //$this->fb->setDefaultAccessToken($token);
    }
}
