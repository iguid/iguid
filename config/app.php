<?php


/**
 * ----------------------------------------------------------
 *  Handle your all config app
 *  
 */

return [
    'app' => 'iguid',

    /**
     * ----------------------------------------------------------
     * If we have a return value in the controller array
     * It will return the value in json format as default
     * 
     * support: json|array
     * ----------------------------------------------------------
     */
    'format' => 'json',


    'cwd' => getcwd(),
];