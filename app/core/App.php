<?php
class App{

    //bootstrapping application
    protected $controller   = 'home';
    protected $method       = 'index';

    protected $params = [];

    public function __construct(){
        $url = $this->parseUrl();
        //print_r($url);
        if(isset($url[0]) && file_exists('../app/controllers.' . $url[0] . '.php')){
            $this -> controller = $url[0];
            unset($url[0]);
        }
        require_once('../app/controllers/' . $this->controller . '.php');

        echo $this -> controller;
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            //remove leading '/' and illegal characters, then explode by '/'
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
?>