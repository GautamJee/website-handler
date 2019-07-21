<?php
/*
 * @author GAUTAM JEE
 * @facebook https://www.facebook.com/gautamkumar.burman
 * @twitter https://twitter.com/gautam_burman
 * @googleplus https://plus.google.com/kumargautamburman
 */

session_reset();
echo "Successfully Logging You Out !";
session_start();
$_SESSION['user'] = 'guest';
require("../libs/configadmin.php");
echo "Successfully Logged Out !";
?>
