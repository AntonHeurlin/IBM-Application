<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;


class GetEntries extends AbstractRequestHandler {

  private $recipeSite;

  public function setRecipeSite($recipeSite){
    $this->recipeSite = $recipeSite;
  }

    protected function doExecute() {
      $contr = $this->session->get(Constants::CHAT_CONTR_KEY);
      $result = $contr->getReviews(TRUE, $this->recipeSite);

      echo \json_encode($result);

    }

}
