<?php
    class Story {
        private $idStory;
        private $description;
        private $keyword;
        private $title;
        private $storyDate;
        private $numberOfPeopleSave;


        public function __construct($idStory = NULL, $description = '', $keyword = '', $title = '', 
            $storyDate = '', $numberOfPeopleSave = '') {
            $this->idStory = $idStory;
            $this->description = $description;
            $this->keyword = $keyword;
            $this->title = $title;
            $this->storyDate = $storyDate;
            $this->numberOfPeopleSave = $numberOfPeopleSave;
        }

        /*  ---------------------------------
            -------------- SET --------------
            ---------------------------------  */

        public function setId($idStory) {
            $this->idStory = $idStory;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setKeyword($keyword) {
            $this->keyword = $keyword;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function setStoryDate($storyDate) {
            $this->storyDate = $storyDate;
        }

        public function setNumberOfPeopleSave($numberOfPeopleSave) {
            $this->numberOfPeopleSave = $numberOfPeopleSave;
        }



        /* ---------------------------------
            -------------- GET --------------
            --------------------------------- */

        public function getId() {
            return $this->idStory;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getKeyword() {
            return $this->keyword;
        }

        public function getTitle() {
            return $this->title;
        }
        
        public function getStoryDate() {
            return $this->storyDate;
        }

        public function getNumberOfPeopleSave() {
            return $this->numberOfPeopleSave;
        }
    }
?>