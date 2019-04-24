<?php

namespace TastyRecipes\Util;

use Id1354fw\Util\Classes;

/**
 * Defines constants used by the chat application, should be implemented by any class that needs
 * to use one or more of these constants.
 *
 * @author Leif Lindback, leifl@kth.se
 */
class Constants {

    const CHAT_CONTR_KEY = 'CHAT_CONTR_KEY';

    const CHAT_FIRST_PAGE_HANDLER = 'TastyRecipes/View/FirstPage';


    const CHAT_USERNAME_VAR = 'username';
    const CHAT_ENTRIES_VAR = 'entries';

    /**
     * @return string The path to the directory where view fragments (header, footer, etc)
     *                 are located.
     */
    public static function getViewFragmentsDir() {
        return $_SERVER['DOCUMENT_ROOT'] . Classes::getContextPath() . '/resources/fragments/';
    }

}
