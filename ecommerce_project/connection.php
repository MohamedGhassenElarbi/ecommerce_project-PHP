<?php
// Connexion à la bdd
try{
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "ma_base";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
}
catch(PDOException $e){
    echo'Echec lors de la connection:'.$e->getMessage();
}
?>