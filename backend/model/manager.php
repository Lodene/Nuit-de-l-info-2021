<?php
    class Manager {
        protected $bdd;
		
		function __construct($host = 'localhost', $user = 'root', $db = 'dunkerquerescuer', $pwd = '') {
			$this->bdd = new PDO ('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pwd);
		}	

        public function query($query, array $vars){
            $traitement = $this->bdd->prepare($query);
            $traitement->execute($vars);
            return($traitement);
        }
    }