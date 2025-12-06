<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql-640c046-dessyabraham2000-c866.k.aivencloud.com');
define('DB_NAME', 'crud_app');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', '$2y$10$WsVpM7DyxiXJPb88pp1d2.rc5QlOyXypzrXnhoDfs1DSMZX6mtWCO');
define('DB_PORT', '12272');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>