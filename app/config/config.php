<?php

const CONFIG = [
    'db'=>'mysql:host=localhost;dbname=velvet_db',
    'db_user' => 'root',
    'db_password' => ''
];

//app root
define('APPROOT',dirname(dirname(__FILE__))) ;

//for using url's

define('URLROOT','http://localhost/Velvet/');

//SITE Name

define('SITENAME','Velvet');
?>