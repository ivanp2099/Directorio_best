<?php
$uri = $_SERVER['REQUEST_URI'];
$bn = basename(__FILE__);

if(strpos($uri,$bn) !== false){header("Location:../index.php");exit();}

global $config;
try{
    $db = new PDO('mysql:host='.$config['dbhost'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e){
    die();
}

?>