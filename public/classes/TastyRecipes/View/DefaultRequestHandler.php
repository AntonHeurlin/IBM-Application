<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use Id1354fw\Util\Classes;
use TastyRecipes\Controller\Controller;
use TastyRecipes\Util\Constants;


class DefaultRequestHandler extends AbstractRequestHandler {

    protected function doExecute() {
        $this->session->restart();
        $this->session->set(Constants::CHAT_CONTR_KEY, new Controller());
        \header('Location: ' . Classes::getContextPath() .
                Constants::CHAT_FIRST_PAGE_HANDLER);
    }

}
