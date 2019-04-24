<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use Chat\Util\Constants;


class CalendarDirect extends AbstractRequestHandler {

    protected function doExecute() {
        $this->session->restart();
        return 'CalendarPage';
    }

}
