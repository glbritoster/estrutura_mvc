<?php
require 'enviroment.php';
$config = array();
if(ENVIROMENT == 'development'){
    define("BASE_URL","http://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'brito';
}else{
    define("BASE_URL","http://meusite.com.br/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'brito';
}

global $db;

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass']);
    
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}