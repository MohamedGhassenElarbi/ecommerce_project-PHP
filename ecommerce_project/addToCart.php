<?php
session_start();
require_once('ShoppingCart.php');
require_once('data.php');
$item_id= $_GET['id'];
$sql_p = "select * from phone where id=$item_id";
    // 2. Exécuter la requête SQL
    $res=$cnx->query($sql_p);//exec is used with insert/update/delete
                           //$cnx->query is used with select
     
	 $p = $res->fetch();
//$cart->value+=$p['price']
$_SESSION["lePrix"] +=$p['price'];


header('Location:index.php');
?>