<?php

namespace TastyRecipes\Controller;

use TastyRecipes\Integration\DBhandler;
use TastyRecipes\Model\Entry;
use TastyRecipes\Model\User;


class Controller {

    private $dbhandler;
    private $username;
    private $currentUser;


    public function __construct() {
        $this->dbhandler = new DBhandler();
    }

    public function addEntry(Entry $entry, $msgSection) {
        $this->dbhandler->addEntry($entry, $msgSection);
    }


     public function getReviews($removeDeleted = false, $recipeSite) {
         return $this->dbhandler->getReviews($recipeSite, $removeDeleted);
     }


    public function login($username, $password) {
        $this->currentUser = $this->dbhandler->findUser($username);
        if($this->currentUser->login($username, $password) && $this->currentUser != null){
          $this->username = $this->currentUser->getNickName();
        }
        else{
          $this->username = 'Fel';
        }
    }


    public function getUsername() {
        return $this->username;
    }


    public function deleteEntry($timestamp, $recipeSite) {
        $this->dbhandler->deleteEntry($timestamp, $recipeSite);
    }

}
