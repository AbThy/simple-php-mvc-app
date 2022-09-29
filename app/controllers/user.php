<?php
    class User extends Controller
    {
        public function index($param1 = 'Teszt Felhasználó!')
        {
            //moved the folder inside <- i think there wass accessibility problems - only way it worked was a burnt_in full path (below)
            //require_once('F:/Apps/xamp/htdocs/RabIT/simple-php-mvc-app/app/models/UserModel.php');
            require_once("models/UserModel.php");
            //returning array of entities in DB
            $array = $this->get_users_from_db();
            $this->view('user', ['data' => $array]);
        }

        public function get_users_from_db()
        {
            // create connection to DB "advertisement_app"
            $conn = new mysqli('localhost','root','','advertisement_app');
            $array = [];
            if($conn->connect_error){
                return $array;
            }
            $stmt = "SELECT * FROM user";
            $result = $conn->query($stmt);
            //get stdclass objects
            while($u = $result->fetch_object()){
                //create UserModel from object
                $user = new UserModel($u->id, $u->name);
                array_push($array, $user);
            }
            //returning User array
            return $array;
        }
    }
?>