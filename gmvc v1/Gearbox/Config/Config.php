<?php
// Project Name : GMVC A Framework for Build Cross Platform Easily
// Project Version : v.01.5
//Author : Krishanu Bhattacharya
//Get This Project: https://github.com/aloraytech/G-Framework
// License Type : GPL v3.0 Apply for This Version
// Note : This version is a beta version and this project under development. The Final Product may content some other licenseing terms as per 
// per part of respective writings on this application scripts directly or indirectly. Please check https://github.com/aloraytech/G-Framework/ for more info.
//

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
