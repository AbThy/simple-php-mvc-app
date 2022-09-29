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

        public function get_users_from_db()
        {
            // create connection to DB "advertisement_app"
            $conn = new mysqli('localhost','root','','advertisement_app');
            $user = $this->model('UserModel');
            $array = [];
        }
    }
?>