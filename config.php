
<?php
// test_connection.php
$configs = [
    [
        'host' => 'mysql-10dead2a-crudd.g.aivencloud.com',
        'port' => 17808,
        'db' => 'cruddapp',
        'user' => 'avnadmin',
        'pass' => '$2y$10$hPvLTgiV86nYkTbsg4yV/ep1E6VlfspZkf6jY9i4ybiEFDGsO2Tq.'
    ]
];

foreach ($configs as $config) {
    echo "Trying: {$config['user']}@{$config['host']}<br>";
    $link = @mysqli_connect($config['host'], $config['user'], $config['pass'], $config['db'], $config['port']);
    if ($link) {
        echo "SUCCESS! Connected to database.<br>";
        mysqli_close($link);
        break;
    } else {
        echo "Failed: " . mysqli_connect_error() . "<br><br>";
    }
}
?>