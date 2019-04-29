<?php
require_once('phone.php');
require_once('ShoppingCart.php');
include('connection.php');

    $sql_note = "select * from phone ";
    // 2. Exécuter la requête SQL
    $res=$cnx->query($sql_note);//exec is used with insert/update/delete
                           //$cnx->query is used with select
     $phones=array(); 
     $p = $res->fetchAll();                     
  foreach($p as $ps){

    
    $var=new phone($ps['id'],$ps['state'],$ps['name'],$ps['marque'],$ps['image'],$ps['price'],$ps['description'],$ps['couleur']);
    $phones[] = $var;
    
    
  }
  
?>