<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Controller\Controller;


class AmericanPancakeDirect extends AbstractRequestHandler {

  private $recipeSite = 'AmericanPancake';

    protected function doExecute() {
      $this->session->restart();
      $contr = $this->session->get(Constants::CHAT_CONTR_KEY);
      if(!empty($contr)){
        $this->addVariable(Constants::CHAT_ENTRIES_VAR, $contr->getReviews(TRUE, $this->recipeSite));
        $this->addVariable(Constants::CHAT_USERNAME_VAR, $contr->getUsername());
        $this->session->set(Constants::CHAT_CONTR_KEY, $contr);
        return 'AmericanPancakePage';
      }
      if(empty($contr)){
        $contr = new Controller();
        $this->addVariable(Constants::CHAT_ENTRIES_VAR, $contr->getReviews(TRUE, $this->recipeSite));
        $this->addVariable(Constants::CHAT_USERNAME_VAR, $contr->getUsername());
        $this->session->set(Constants::CHAT_CONTR_KEY, $contr);
        return 'AmericanPancakePage';
      }

    }

}
