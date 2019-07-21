<?php
/*
 * @author GAUTAM JEE
 * @facebook https://www.facebook.com/gautamkumar.burman
 * @twitter https://twitter.com/gautam_burman
 * @googleplus https://plus.google.com/kumargautamburman
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/website-maker/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'guestcse');
define('DB_HOST_PASSWORD', 'gautam1!');
define('DB_DATABASE', 'website-maker');

define('SITE_NAME', 'WebSite Maker');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>
