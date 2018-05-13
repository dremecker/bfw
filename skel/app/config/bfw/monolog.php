<?php
/**
 * Config file for monolog
 * 
 * @author bulton-fr <bulton.fr@gmail.com>
 * @version 3.0.0
 * @package bfw
 */

use Monolog\Logger;

return (object) [
    'handlers' => [
        /**
         * Value example:
        (object) [
            'name' => '\Monolog\Handler\StreamHandler',
            'args' => [
                APP_DIR.'logs/bfw/bfw.log',
                Logger::DEBUG
            ]
        ]
        */
    ]
];
