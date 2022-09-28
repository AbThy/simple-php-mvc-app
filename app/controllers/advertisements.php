<?php
class Advertisements extends Controller
{
    public function index()
    {
        $array = $this->get_ads_from_sql();
        $this->view('advertisement', ['data' => $array]);
    }

    public function get_ads_from_sql()
    {
        // create connection to DB "advertisement_app"
        $conn = new mysqli('localhost','root','','advertisement_app');
        $user = $this->model('UserModel');
        $array = [];
        if($conn->connect_error){
            die('Connection Failed');
        } else {
            $stmt = "SELECT * FROM advertisements";
            $result = $conn->query($stmt);
        }
        $array;
        while ($user = $result->fetch_object()) {
            array_push($array, $user);
        }
        return $array;
    }
}
?>