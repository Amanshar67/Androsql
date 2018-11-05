<?php
 
/*
 * All database connection variables
 */
 
define('DB_USER', "root"); // db user
define('DB_PASSWORD', ""); // db password 
define('DB_DATABASE', "androsql"); // database name
define('DB_SERVER', "localhost"); // db server

$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

?>
