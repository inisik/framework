<?php

/**
*	Limeberry Framework
*	
*	a php framework for fast web development.
*	
*	@package Limeberry Framework
*	@author Sinan SALIH
*	@copyright Copyright (C) 2018 Sinan SALIH
*	
**/


/**
 * Core code files of limeberry console.
 * @var string $core
 */
$core = 'core'; 
require_once $core.DIRECTORY_SEPARATOR.'Core.php';

/**
 * Define constants for limeberry console
 */
define("DS", DIRECTORY_SEPARATOR);
define("APP", dirname(dirname(__FILE__)));



switch (Core::clearArg($argv[1])){
    case "create:controller" :
        {
            require_once $core.DS.'Create.php';
            Create::Controller(APP.DS."controller".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:area" :
        {
            require_once $core.DS.'Create.php';
            Create::Area(APP.DS."controller".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:model" :
        {
            require_once $core.DS.'Create.php';
            Create::Model(APP.DS."model".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:template" :
        {
            require_once $core.DS.'Create.php';
            Create::Template(APP.DS."template".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:view" :
        {
            require_once $core.DS.'Create.php';
            Create::View(APP.DS."view".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:viewarea" :
        {
            require_once $core.DS.'Create.php';
            Create::ViewArea(APP.DS."view".DS ,Core::checkArg($argv[2]));
            break;
        }
    case "create:viewlayout" :
        {
            require_once $core.DS.'Create.php';
            Create::ViewLayout(APP.DS."view".DS ,Core::checkArg($argv[2]),Core::checkArg($argv[3]));
            break;
        }
   
    default:
        echo "Limeberry PHP Framework \n\n [!] Command not found. Please run 'get:help' for help.\n\n";
        break;
}

