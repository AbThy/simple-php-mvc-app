<?php
class App{

    protected $controller   = 'home';
    protected $method       = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseUrl();
        // we don't need the /public root but i can't set it in htaccess to ignore it
        if(count($url) > 0){
            array_shift($url);
        }
        // check if a controller is being passed and the given controller exists
        if(isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')){
            $this -> controller = $url[0];
            unset($url[0]);
        }
        require_once('../app/controllers/' . $this->controller . '.php');
        // i'm not sure whay this below is needed? 
        $this->controller = new $this->controller;
        // checking if a method is given and if its valid in the controller
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //if there is no params left, we pass no arguments
        $this->params = $url ? array_values($url) : [];
        // call controller method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            //remove leading '/' and illegal characters, then explode by '/'
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
?>