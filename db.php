<?php
$configs = include('config.php');

$server =  $configs->{'sql12.freemysqlhosting.net'};
$database = $configs->{'sql12340596'};
$user = $configs->{'sql12340596'};
$pass = $configs->{'wpetblKIfN'};

$connection = new mysqli($server, $user, $pass, $database);


 return $connection;
