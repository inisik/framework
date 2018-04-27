<?php
/**
 * Limeberry Framework
 *
 * A php framework for fast web development.
 *
 * @package Limeberry Framework
 * @author Sinan SALIH
 * @copyright Copyright (C) 2018 Sinan SALIH
 */

define('APP_FOLDER', 'application');
define('APP_IS_ROOT', false);

define('APP_IS_URLSECURE', false);
define('APP_UNWANTED_PARAMS', array());

define('APP_INSTALL_LOCATION', 'localhost');
define('APP_STATIC_ROUTES', array());

define('APP_NAME', 'Limeberry Application');
define('APP_DESC', 'Your description for the application.');

define('APP_QUERY_DATA', array());

// These two configuration options should never change.
defined('LIMEBERRY_VERSION') || define('LIMEBERRY_VERSION', '1.1.0');
defined('ROOT') || define('ROOT', dirname(dirname(__FILE__)));
