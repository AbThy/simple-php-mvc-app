<?php
class App{

    //bootstrapping application
    protected $controller   = 'home';
    protected $method       = 'index';

    protected $params = [];

    public function __construct(){
        $url = $this->parseUrl();
        print_r($url);
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)); //remove leading '/' and illegal characters
        }
    }
}
?>