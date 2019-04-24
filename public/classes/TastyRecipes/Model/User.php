<?php

namespace TastyRecipes\Model;

/**
 * Holds one entry in the conversation.
 */
class User {

    private $username;
    private $password;


    /**
     * Constructs a new, not deleted, entry with the timestamp set to the time when this constructor is called.
     */
    public function __construct($uname, $psw) {
        $this->username = $uname;
        $this->password = $psw;
    }

    /**
     * @return string The author's nick name.
     */
    public function getNickName() {
        return $this->username;
    }

    /**
     * @return string The message.
     */
    public function getPassword() {
        return $this->password;
    }

    public function login($uname, $psw){
      if($this->username == $uname && $this->password == $psw){
        return true;
      }
    }



}
