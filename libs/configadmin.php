<?php
session_start();

if( $_SESSION['user'] != 'admin' )
{

	 $extra="/website-maker/manage-site/index.php";
	$host=$_SERVER['HTTP_HOST'];
	 header("location:http://$host/$extra");
}
else{

/*
 * @author GAUTAM JEE
 * @facebook https://www.facebook.com/gautamkumar.burman
 * @twitter https://twitter.com/gautam_burman
 * @googleplus https://plus.google.com/kumargautamburman
 */


// display all error except deprecated and notice  
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
// turn on output buffering 
ob_start();

/*
if you make login section for admin 
use session here otherwise no need
session_start();
*/

require_once("constants1.php");
require_once("common_functions.php");

/*
 * turn off magic-quotes support, for runtime, as it will cause problems if enabled
 */
if (version_compare(PHP_VERSION, 5.3, '<') && function_exists('set_magic_quotes_runtime')) set_magic_quotes_runtime(0);

// set currentPage in the local scope
$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);


// basic options for PDO
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect with the server
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_HOST_USERNAME, DB_HOST_PASSWORD, $dboptions);
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());
    die;
}		
}
?>