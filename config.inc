<?php

/**
	@copyright 2016 KaseyHart
	@license MIT; see license.txt
	@author Kasey Hart
*/

// Site Name
$site_name = "Hart Cemetery";

// Site Address
$site_addr0 = "PO Box 362";
$site_addr1 = "Hart, TX 79043";
$site_addr2 = "";


// define Applicaiton home
define('APP_HOME','/Users/kasey/www/MyOpenCemetery');
	
	
// define database setup
$servername = "localhost";
$username = "cem_admin";
$password = "e=mc2_a=(v-u)/t";
$dbname = "openCemetery";

// Create connection
// $con = new mysqli($servername, $username, $password, $dbname);

// Set Currency
setlocale(LC_MONETARY,"en_US");

?>