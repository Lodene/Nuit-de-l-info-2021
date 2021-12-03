<?php
    require('manager.php');
    require('../controler/story.php');
    class StoryManager {
        private $story;

        public function __construct() {
            $this->story = new Story();
        }

        public function researchStory($research){
            $query = $this->manager->query('SELECT * FROM story WHERE MATCH(firstName, lastName) AGAINST (:research)',  array(':research' => $research));

            $storyArray = array();
            $results = $query->fetchAll();
            
            foreach($results as $story){
                $newStory = new Story($story['idStory'], $rescuer['description'], $rescuer['keyword'],
                    $story['title'], $story['storyDate'], $story['numberOfPeopleSave']);
                array_push($storyArray, $newStory);
            }

            return $storyArray;
        }
    }
