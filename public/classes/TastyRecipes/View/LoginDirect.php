<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;


class LoginDirect extends AbstractRequestHandler {

    protected function doExecute() {
        $this->session->restart();
        return 'LoginPage';
    }

}
