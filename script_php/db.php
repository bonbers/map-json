<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'coda';
$DB_NAME = 'user_json';

try{
$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::FETCH_OBJ);

}
catch(PDOException $e){
echo $e->getMessage();
}

