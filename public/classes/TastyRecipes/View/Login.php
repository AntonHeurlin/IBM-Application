<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Controller\Controller;
use TastyRecipes\Util\Constants;


class Login extends AbstractRequestHandler {

    private $nickName;
    private $password;

    public function setNickName($nickName) {
      if(!empty($nickName) && ctype_print($nickName)){
       $this->nickName = $nickName;
      }
      else{
        $this->nickname = 'Invalid';
      }
    }
    public function setPassword($password) {
      if(!empty($password) && ctype_print($password)){
        $this->password = hash('MD5', $password);
      }
      else{
        $this->password = "Invalid";
      }
    }
    protected function doExecute() {
        $this->session->restart();
        $this->session->set(Constants::CHAT_CONTR_KEY, new Controller());
        $contr = $this->session->get(Constants::CHAT_CONTR_KEY);
        $contr->login($this->nickName, $this->password);
        $this->session->set('username', $contr->getUsername());
        $this->session->set(Constants::CHAT_CONTR_KEY, $contr);
        if($this->session->get('username') != null){
          if($this->session->get('username') == 'Fel'){
            $result = "Invalid User Information";
          }
          else{
            $result = "Succesful Login!";
        }
    }
    $resp = new \stdClass();
    $resp->value = $result;
    echo \json_encode($resp);
}
}
