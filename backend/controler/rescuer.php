<?php
    class Rescuer {
        private $idRescuer;
        private $firstName;
        private $lastName;
        private $birthDay;
        private $sources;
        private $age;
        private $rescueNumber;

        public function __construct($idRescuer = NULL, $firstName = '', $lastName = '', $birthDay = '', $sources = '', $age = '', 
            $rescueNumber = '') {
            $this->idRescuer = $idRescuer;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->birthDay = $birthDay;
            $this->sources = $sources;
            $this->age = $age;
            $this->rescueNumber = $rescueNumber;
        }

        /* ---------------------------------
           -------------- SET --------------
           --------------------------------- */
        public function setId($idRescuer){
            $this->idRescuer = $idRescuer;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function setLasttName($firstName){
            $this->firstName = $firstName;
        }

        public function setBirthDay($birthDay){
            $this->birthDay = $birthDay;
        }

        public function setsources($sources){
            $this->sources = $sources;
        }

        public function setAge($age){
            $this->age = $age;
        }
        
        public function setRescueNumber($rescueNumber){
            $this->rescueNumber = $rescueNumber;
        }

        /* ---------------------------------
           -------------- GET --------------
           --------------------------------- */

        public function getId(){
            return $this->idRescuer;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getBirthDay(){
            return $this->birthDay;
        }

        public function getsources(){
            return $this->sources;
        }

        public function getAge(){
            return $this->age;
        }   
        
        public function getRescueNumber(){
            return $this->rescueNumber;
        } 
    }
?>