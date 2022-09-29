<?php
    class UserModel
    {
        private $id;
        private $name;

        public function get_id() { 
            return $this->id; 
        }
        public function get_name() { 
            return $this->name; 
        }

        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
    }
?>