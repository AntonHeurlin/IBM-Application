<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Controller\Controller;
use TastyRecipes\Util\Constants;

class Logout extends AbstractRequestHandler{

  public function doExecute(){
    $this->session->invalidate();
    $this->session->restart();
    $contr = $this->session->get(Constants::CHAT_CONTR_KEY);
    $user = $this->session->get('username');
    if($user == null){
      $result = "YOU ARE NOT LOGGED IN";
    }
    else{
      $result = "YOU ARE STILL LOGGED IN";
    }
    $resp = new \stdClass();
    $resp->value = $result;
    echo \json_encode($resp);
    //return 'HomePage';
  }

}
