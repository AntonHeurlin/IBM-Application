<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Model\Entry;


class StoreEntry extends AbstractRequestHandler {

    private $msg;
    private $msgSection;

    public function setMsg($msg) {
      if(!empty($msg) && ctype_print($msg)){
        $this->msg = $msg;
      }
    }

    public function setMsgSection($msgSection){
      $this->msgSection = $msgSection;
    }

    protected function doExecute() {
        $contr = $this->session->get(Constants::CHAT_CONTR_KEY);

        if(!empty($this->msg)){
          $new_entry = new Entry($contr->getUsername(), $this->msg);
          $contr->addEntry($new_entry, $this->msgSection);
        }

        if($this->msgSection == 'AmericanPancake'){
          //$this->addVariable(Constants::CHAT_ENTRIES_VAR, $contr->getReviews(TRUE, $this->msgSection));
          //$this->addVariable(Constants::CHAT_USERNAME_VAR, $contr->getUsername());
          $this->session->set(Constants::CHAT_CONTR_KEY, $contr);
          $result = $new_entry;
          echo \json_encode($result);

        }
        if($this->msgSection == 'SwedishPancake'){
          //$this->addVariable(Constants::CHAT_ENTRIES_VAR, $contr->getReviews(TRUE, $this->msgSection));
          //$this->addVariable(Constants::CHAT_USERNAME_VAR, $contr->getUsername());
          $this->session->set(Constants::CHAT_CONTR_KEY, $contr);
          $result = $new_entry;
          echo \json_encode($result);
          //return 'SwedishPancakePage';
        }

    }

}
