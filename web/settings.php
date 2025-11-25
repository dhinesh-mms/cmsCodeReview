<?php

/*
 * Oasys Digital Signage
 * 
 * 
 */


defined('XIBO') or die(__("Sorry, you are not allowed to directly access this page.") . "<br />" . __("Please press the back button in your browser."));

global $dbhost;
global $dbuser;
global $dbpass;
global $dbname;
global $dbssl;
global $dbsslverify;

$dbhost = 'localhost';
$dbuser = 'neduuser';
$dbpass = 'nedu@123';
$dbname = 'nedu_db';
$dbssl = '';
$dbsslverify = '';

if (!defined('SECRET_KEY'))
    define('SECRET_KEY','9XLhnyJ2zR9p');;

if (file_exists('/var/www/cms/custom/settings-custom.php'))
    include_once('/var/www/cms/custom/settings-custom.php');
