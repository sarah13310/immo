<?php

namespace App\Controllers;

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
        $this->google = new GoogleLogin();
        $this->auth_g = $this->google->getLoginUrl();

        //init objet login pour facebook
        $this->facebook = new FacebookLogin();
        $this->auth_fb = $this->facebook->getLoginUrl();
    }

    public function index()
    {
        $listproperties=$this->property_model->getProperties();
        if ($listproperties==null){
        
        }
        
    
        $property_json = json_encode($listproperties);
        file_put_contents("json/property.json", $property_json);

        $data = [
            'property_json' => base_url() . "json/property.json",
        ];
        return view('/Home/index.php', $data);
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
        $data = ["name" => "", "email" => "",];
        return view('/User/profile.php', $data);
    }

    public function loginWithGoogle()
    {
        if ($this->google === null) return;
        $token = $this->google->getAccessToken($this->request->getVar("code"));
        if (!isset($token['error'])) {
            session()->access_token = $token;
            $info = $this->google->getUserProfile($token);
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
            session()->name = $info['name'];
            session()->mail = $info['email'];
            session()->id = $info['id'];
            session()->picture = $info['picture'];
            //
            return view('/User/profile.php', $data);
        }
    }


    public function manageCookies()
    {
    }

    public function showmap(){
        $data=[];
        return view('/Home/showmap.php', $data);
    }

    public function test(){
        return view('/Home/test.php');
    }

    public function chart(){
        return view('/Home/chart.php');
    }

    public function part1(){
        return view('/Home/account-part1.php');
    }
   
    public function part1code(){
        return view('/Home/account-part1-code.php');
    }

    public function part2(){
        return view('/Home/account-part2.php');
    }
}
