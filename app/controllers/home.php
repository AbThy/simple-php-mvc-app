<?php

class Home extends Controller
{
    public function index($param1 = '')
    {
        if($param1 === ''){
        echo 'home/index';
        } else {
            echo $param1;
        }
    }
}

?>