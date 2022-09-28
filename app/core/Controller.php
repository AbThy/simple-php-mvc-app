<?php
class Controller
{
    //set current model based on params
    protected function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    //set current view based on params
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }
}
?>