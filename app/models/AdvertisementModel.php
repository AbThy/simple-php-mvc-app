<?php
    class AdvertisementModel
    {
        private $id;
        private $userid;
        private $title;

        public function get_id() { 
            return $this->id; 
        }
        public function get_userid() { 
            return $this->userid; 
        }
        public function get_title() { 
            return $this->title; 
        }

        public function __construct($id, $userid, $title){
            $this->id = $id;
            $this->userid = $userid;
            $this->title = $title;
        }
    }
?>