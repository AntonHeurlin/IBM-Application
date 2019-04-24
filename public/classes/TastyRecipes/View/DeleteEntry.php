<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Model\Entry;


class DeleteEntry extends AbstractRequestHandler {

    private $timestamp;
    private $recipeSite;

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function setRecipeSite($recipeSite) {
        $this->recipeSite = $recipeSite;
    }

    protected function doExecute() {
        $contr = $this->session->get(Constants::CHAT_CONTR_KEY);

        $contr->deleteEntry($this->timestamp, $this->recipeSite);

        //$this->addVariable(Constants::CHAT_ENTRIES_VAR, $contr->getReviews(TRUE, $this->recipeSite));
        //$this->addVariable(Constants::CHAT_USERNAME_VAR, $contr->getUsername());

        $this->session->set(Constants::CHAT_CONTR_KEY, $contr);

        $result = "did it work?";
        $resp = new \stdClass();
        $resp->value = $result;
        echo \json_encode($resp);
        //if($this->recipeSite == 'AmericanPancake'){
        //  return 'AmericanPancakePage';
        //}
        //if($this->recipeSite == 'SwedishPancake'){
        //  return 'SwedishPancakePage';
        //}
    }

}
