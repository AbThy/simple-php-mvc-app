<?php
    class User extends Controller
    {
        public function index($param1 = 'Teszt Felhasználó!')
        {
            $user = $this->model('UserModel');
            $user->name = $param1;
            $user->id   = 0;
    
            $this->view('user', ['name' => $user->name]);
        }
    }
?>