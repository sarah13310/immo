<?php

namespace App\Controllers;

use Config\Facebook;
use Google\Client;
use Google\Service\Oauth2;
use App\Libraries\FacebookLogin;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

class Home extends BaseController
{
    private $usermodel = NULL;
    private $clientgoogle = NULL;
    private $facebook = NULL;
    private $helper = NULL;
    private $auth = null;
    private $auth_fb = null;
    function __construct()
    {
        $this->clientgoogle = new \Google_Client();
        $this->clientgoogle->setClientId("670023878960-jrfveill0d6ietpvfmf6h3ui8m5ukrks.apps.googleusercontent.com");
        $this->clientgoogle->setClientSecret("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");
        $this->clientgoogle->setRedirectUri("http://localhost:8080/google/auth");
        $this->clientgoogle->addScope("email");
        $this->clientgoogle->addScope("profile");
        $this->auth = $this->clientgoogle->createAuthUrl();
        $this->facebook = new FacebookLogin();
        /*$this->facebook = new \Facebook\Facebook([
            "app_id" => "1177289809606513",
            "app_secret" => "034210c0ceded476912057e3e1529208",
            "default_graph" => "v2.5",
        ]);
        //
        $this->helper = $this->facebook->getRedirectLoginHelper();

        $fb_permission = ['email','user_photos'];
        $this->auth_fb = $this->helper->getLoginUrl(base_url() . 'facebook/auth', $fb_permission);
        */

        $this->auth_fb=$this->facebook->getLoginUrl();
        
    }
    public function index()
    {
        return view('/Home/index.php');
    }
    public function login()
    {
        $data = [
            "auth" => $this->auth,
            "auth_fb" => $this->auth_fb,
        ];
        return view('/Home/login.php', $data);
    }
    public function profile()
    {
        return view('/Home/profile.php');
    }

    public function loginWithGoogle()
    {
        if ($this->clientgoogle === null) return;
        $token = $this->clientgoogle->fetchAccessTokenWithAuthCode($this->request->getVar("code"));
        if (!isset($token['error'])) {
            $this->clientgoogle->setAccessToken($token['access_token']);
            session()->access_token = $token;
            $google_service = new OAuth2($this->clientgoogle);
            $info = $google_service->userinfo->get();
            session()->name = $info->name;
            session()->mail = $info->email;
            session()->id = $info->id;
            session()->picture = $info->picture;
            $data = [
                "id" => $info->id,
                "name" => $info->name,
                "email" => $info->email,
                "picture" => $info->picture,
            ];
            return view('/User/profile.php', $data);
        } else {
            $authUrl = $this->clientgoogle->createAuthUrl();
            header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
        }
    }

    public function loginWithFacebook()
    {
        if ($this->request->getVar('state')) {
            $this->facebook->setState($this->request->getVar('state'));
            //
            if ($this->request->getVar('code')) {
                if (session()->get("fb_token")) {
                    $fb_token = session()->fb_token;
                } else {
                    $fb_token = $this->facebook->getAccessToken();
                    session()->fb_token = $fb_token;
                    $this->facebook->setDefaultAccessToken($fb_token);
                }
            }
            $info = $this->facebook->getUserProfile($fb_token);
            $data = [
                "id" => $info['id'],
                "name" => $info['name'],
                "email" => $info['email'],
                "picture" => $info['picture']['url'],
            ];
            
            return view('/User/profile.php', $data);
        }    
    }
        /*   public function loginWithFacebook2()
    {
        if ($this->facebook === null) return;
        if ($this->request->getVar('state')) {
            $this->helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
        }
        if ($this->request->getVar('code')) {
            if (session()->get("fb_token")) {
                $fb_token = session()->fb_token;
            } else {
                try {
                    $fb_token = $this->helper->getAccessToken();
                } catch (FacebookResponseException $err) {
                    // Si une erreur se produit lors de la récupération du token d'accès.
                    echo 'Graph returned an error: ' . $err->getMessage();
                    exit;
                } catch (FacebookSDKException $e) {
                    // Si une erreur se produit lors de la communication avec l'API Facebook.
                    echo 'Facebook SDK returned an error: ' . $e->getMessage();
                    exit;
                }

                session()->fb_token = $fb_token;
                $this->facebook->setDefaultAccessToken($fb_token);
            }
        }

        try {
            $graph_response = $this->facebook->get('/me?fields=id,name,email,picture.width(200).height(200)', $fb_token);
            $info = $graph_response->getGraphUser();

            $data = [
                "id" => $info['id'],
                "name" => $info['name'],
                "email" => $info['email'],
                "picture" => $info['picture']['url'],
            ];
            // var_dump($info);
            // die();
            return view('/User/profile.php', $data);
        } catch (FacebookResponseException $err) {
            // Si une erreur se produit lors de la récupération du token d'accès.
            echo 'Graph returned an error: ' . $err->getMessage();
            exit;
        } catch (FacebookSDKException $e) {
            // Si une erreur se produit lors de la communication avec l'API Facebook.
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    } */
    
}
