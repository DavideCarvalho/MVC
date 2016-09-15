<?php
require "environment.php";

define ("BASE_URL","http://localhost/MVC");

global $config;
$config = array();

if (ENVIRONMENT == "development"){
    $config['dbname'] = "galeria";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
} else {
    $config['dbname'] = "";
    $config['host'] = "";
    $config['dbuser'] = "";
    $config['dbpass'] = "";
}