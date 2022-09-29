<?php
class Advertisements extends Controller
{
    public function index()
    {
        require_once('models/AdvertisementModel.php');
        //returning array of entities in DB
        $array = $this->get_ads_from_db();
        $this->view('advertisement', ['data' => $array]);
    }

    public function get_ads_from_db()
    {
        // create connection to DB "advertisement_app"
        $conn = new mysqli('localhost','root','','advertisement_app');
        $array = [];
        if($conn->connect_error){
            return $array;
        }
        $stmt = "SELECT * FROM advertisements";
        $result = $conn->query($stmt);
        //get stdclass objects
        while ($ad = $result->fetch_object()) {
            //create AdvertisementModel from object
            $advertisement = new AdvertisementModel($ad->id, $ad->userid, $ad->title);
            array_push($array, $advertisement);
        }
        //returning advertisement array;
        return $array;
    }
}
?>