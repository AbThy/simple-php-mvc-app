<?php

class Home extends Controller
{
    public function index($param1 = '')
    {
        //setting the controller's model to user then create a user
        $user = $this->model('User');
        $user->name = 'Teszt Felhasználó';
        echo $user->name;
    }
}

?>