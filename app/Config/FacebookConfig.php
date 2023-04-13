<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class FacebookConfig extends BaseConfig
{
    public $app_id = '1177289809606513';
    public $app_secret = '034210c0ceded476912057e3e1529208';
    public $default_graph_version = 'v2.5';
    public $url_redirect = 'facebook/auth';
}
