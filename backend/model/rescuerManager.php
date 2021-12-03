<?php
    require('manager.php');
    require('../controler/rescuer.php');
    class RescuerManager {
        private $manager;

        public function __construct() {
            $this->manager = new Manager();
        }

        public function researchRescuer($research){
            $query = $this->manager->query('SELECT * FROM rescuer WHERE MATCH(firstName, lastName) AGAINST (:research)',  array(':research' => $research));

            $rescuerArray = array();
            $results = $query->fetchAll();
            
            foreach($results as $rescuer){
                $newRescuer = new Rescuer($rescuer['idRescuer'], $rescuer['firstName'], $rescuer['lastName'], $rescuer['birthDay'],
                    $rescuer['sources'], $rescuer['age']);
                array_push($rescuerArray, $newRescuer);
            }

            return $rescuerArray;
        }
    }
