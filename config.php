<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql-31337248-khalilfelix0-9798.k.aivencloud.com'); // Removed http:// and trailing slash
define('DB_NAME', 'crud_app');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_P3pcRjwO_laRlKVktm8');
define('DB_PORT', '15386');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>