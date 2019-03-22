<?php


// linking with file system

//GEARBOX ROOT
define('GEARBOX', dirname(dirname(__FILE__)));

//CLOUD ROOT

define('CLOUDROOT',dirname(dirname(dirname(__FILE__))) . '/Cloud/');
//UPLOAD ROOT
define('UPLOADROOT',dirname(dirname(dirname(__FILE__))) . '/Cloud/uploads/');

// URLROOT
// Note: change http with https if needed (SSL Activate Status) 
// change gmvc with Custom Name if you change name of this folder

define('URLROOT', 'http://localhost/gmvc');

// SITE NAME
// Note: Site name will be change according your website name

define('SITENAME', 'GMVC');

?>