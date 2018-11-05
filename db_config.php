<?php
 
/*
 * All database connection variables
 */
 
define('DB_USER', "2748278_blog"); // db user
define('DB_PASSWORD', "blog2@laravel"); // db password 
define('DB_DATABASE', "2748278_blog"); // database name
define('DB_SERVER', "fdb21.awardspace.net"); // db server

$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

?>
