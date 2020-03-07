<?php
ini_set("display_errors", true);
date_default_timezone_set("Europe/Kiev");
define("DB_DSN", "mysql:host=localhost;dbname=cms");
define("DB_USERNAME", "cms_user");
define("DB_PASSWORD", "qqq123OL_");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "qwerty");
require(CLASS_PATH . "/Article.php");

function handleException($exception) {
    echo "Sorry, a problem occured. Please try later.";
    error_log($exception->getMessage());
}

set_exception_handler('handleException');
?>