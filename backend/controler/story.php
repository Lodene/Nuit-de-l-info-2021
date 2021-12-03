<?php
    class Story {
        private $idStory;
        private $releaseDate;
        private $description;
        private $keyword;
        private $title;
        private $storyDate;
        private $numberOfPeopleSave;


        public function __construct($idStory = NULL, $releaseDate = '', $description = '', $keyword = '', $title = '', 
            $storyDate = '', $numberOfPeopleSave = '') {
            $this->idStory = $idStory;
            $this->releaseDate = $releaseDate;
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

        public function setReleaseDate($releaseDate) {
            $this->releaseDate = $releaseDate;
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

        public function getIdStory() {
            return $this->idStory;
        }

        public function getReleaseDate() {
            return $this->releaseDate;
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