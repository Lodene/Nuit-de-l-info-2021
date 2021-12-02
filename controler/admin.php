<?php
    class admin {
        private $idAdmin;
        private $login;
        private $password;
        private $email;

        public function __construct($idAdmin = NULL, $login = '', $password = '', $email = '') {
            $this->idAdmin = $idAdmin;
            $this->login = $login;
            $this->password = $password;
            $this->email = $email;
        }

        /* ---------------------------------
        -------------- SET --------------
        --------------------------------- */

        public function setIdAdmin ($idAdmin) {
            $this->idAdmin = $idAdmin;
        }

        public function setLogin ($login) {
            $this->login = $login;
        }

        public function setPassword ($password) {
            $this->password = $password;
        }

        public function setEmail ($email) {
            $this->email = $email;
        }



        /* ---------------------------------
        -------------- GET --------------
        --------------------------------- */
        public function getIdAdmin() {
            return this->idAdmin;
        }

        public function getLogin() {
            return this->login;
        }

        public function getPassword() {
            return this->password;
        }

        public function getEmail() {
            return this->email;
        }
    }
?>
