<?php

session_start();

$host = 'localhost';
$user = 'root';
$password ='1234';
$database_name ='binjiho';

$db = new mysqli($host,$user,$password,$database_name);
$db->set_charset("utf8");

function mq($sql){
    global $db;
    return $db->query($sql);
}

function Console_log($data){
    echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
}

?>