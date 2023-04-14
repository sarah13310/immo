<?php

namespace App\Controllers;

use Config\Facebook;
use Google\Client;
use Google\Service\Oauth2;
use App\Libraries\FacebookLogin;
use App\Libraries\GoogleLogin;

class Home extends BaseController
{
    private $usermodel = NULL;
    private $google = NULL;
    private $facebook = NULL;
    private $auth_g = null;
    private $auth_fb = null;
    function __construct()
    {
        //init objet login pour google
        $this->google=new GoogleLogin();
        $this->auth_g=$this->google->getLoginUrl();
        
        //init objet login pour facebook
        $this->facebook = new FacebookLogin();       
        $this->auth_fb=$this->facebook->getLoginUrl();
        
    }

    public function index()
    {
        return view('/Home/index.php');
    }

    public function login()
    {
        $data = [
            "auth" => $this->auth_g,
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
        if ($this->google === null) return;
        $token=$this->google->getAccessToken($this->request->getVar("code"));
        if (!isset($token['error'])) {
            //$this->clientgoogle->setAccessToken($token['access_token']);
            session()->access_token = $token;
            //$google_service = new OAuth2($this->clientgoogle);
            //$info = $google_service->userinfo->get();
            $info= $this->google->getUserProfile($token); 
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
            
            header('Location: ' . filter_var($this->auth_g, FILTER_SANITIZE_URL));
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
       
    
}
