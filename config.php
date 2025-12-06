<?php
define('DB_SERVER', 'mysql-10dead2a-crudd.g.aivencloud.com');
define('DB_NAME', 'cruddapp');
define('DB_USERNAME', 'avnadmin');
// Use the actual plain text password, not the hashed one
define('DB_PASSWORD', '$2y$10$hPvLTgiV86nYkTbsg4yV/ep1E6VlfspZkf6jY9i4ybiEFDGsO2Tq.');
define('DB_PORT', '17808');

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    mysqli_set_charset($link, "utf8mb4");
    echo "Connected successfully!";
} catch (mysqli_sql_exception $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>