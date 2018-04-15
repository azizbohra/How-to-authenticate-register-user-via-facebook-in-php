<?php
error_reporting(E_ALL);
ob_start();
session_start();
date_default_timezone_set('Asia/Kuwait');

define('BASE_URL', filter_var('https://localhost/websolutionspoint/How-to-authenticate-register-user-via-facebook-in-php/', FILTER_SANITIZE_URL));

// For facebook
define('APP_ID', '1610997559027345');
define('APP_SECRET', '9bbde3007df8051167b1bbf40b8557b1');
define('REDIRECT_URI_FB', 'https://localhost/websolutionspoint/How-to-authenticate-register-user-via-facebook-in-php/fb-callback.php');
