<?php

namespace App\Libraries;

use Config\FacebookConfig;
use Google\Client;
use Google\Service\Oauth2;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;


class FacebookLogin
{
    protected $fb;
    protected $helper;
    protected $auth;
    protected $url_redirect;

    public function __construct(FacebookConfig $config = null)
    {
        if ($config != null) {
            $this->fb = new \Facebook\Facebook([
                "app_id" => $config->app_id,
                "app_secret" => $config->app_secret,
                "default_graph" => $config->default_graph_version,
            ]);
            $this->url_redirect = $config->url_redirect;
        } else {
            $this->fb = new \Facebook\Facebook([
                "app_id" => "1177289809606513",
                "app_secret" => "034210c0ceded476912057e3e1529208",
                "default_graph" => "v2.5",
            ]);
            $this->url_redirect = base_url() . 'facebook/auth';
        }
        //
        $this->helper = $this->fb->getRedirectLoginHelper();

        $fb_permission = ['email', 'user_photos'];
        $this->auth = $this->helper->getLoginUrl($this->url_redirect, $fb_permission);
    }

    // Générer l'URL de connexion Facebook
    public function getLoginUrl()
    {
        $helper = $this->fb->getRedirectLoginHelper();
        $permissions = ['email', 'public_profile'];
        $loginUrl = $helper->getLoginUrl($this->url_redirect, $permissions);
        return $loginUrl;
    }

    // Récupérer le jeton d'accès Facebook à partir de la réponse de connexion
    public function getAccessToken()
    {
        $helper = $this->fb->getRedirectLoginHelper();
        try {
            $accessToken = $helper->getAccessToken($this->url_redirect);
            return $accessToken;
        } catch (FacebookResponseException $e) {
            // Gérer les erreurs de réponse
            return null;
        } catch (FacebookSDKException $e) {
            // Gérer les erreurs de SDK
            return null;
        }
    }

    // Récupérer les informations utilisateur à partir de l'API Facebook
    public function getUserProfile($accessToken)
    {
        $response = $this->fb->get('/me?fields=id,name,email,picture.width(200).height(200)', $accessToken);
        $user = $response->getGraphUser();
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
        $this->fb->setDefaultAccessToken($token);
    }
}
