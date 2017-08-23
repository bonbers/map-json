<?php
require_once "db.php";
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Headers: X-Requested-With');

//function get_Data(){
//    $DB_HOST = 'localhost';
//    $DB_USER = 'root';
//    $DB_PASS = 'coda';
//    $DB_NAME = 'user_json';
//    try{
//        $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
//        $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//    }
//    catch(PDOException $e){
//        echo $e->getMessage();
//    }

$stmt = $DB_con->prepare("SELECT * FROM Users");
$stmt->execute();
$userData = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $userData[] = $row;
}
echo json_encode($userData);
//}
//
//print_r(get_Data());
//$file_name = 'toto.json';
//
//if (file_put_contents($file_name, get_Data()))
//{
//    echo $file_name . 'file created';
//} else {
//    echo 'Error creation';
//}

