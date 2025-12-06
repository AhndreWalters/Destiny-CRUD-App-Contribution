<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql-10dead2a-crudd.g.aivencloud.com');
define('DB_NAME', 'cruddapp');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', '$2y$10$hPvLTgiV86nYkTbsg4yV/ep1E6VlfspZkf6jY9i4ybiEFDGsO2Tq.');
define('DB_PORT', '17808');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>