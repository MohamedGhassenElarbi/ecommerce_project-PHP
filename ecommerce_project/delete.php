<?php
include("connection.php");
$v_id =$_POST['id'];
echo $v_id;
try{
    $sql_del = "DELETE  FROM phone where id ='$v_id'";
    // 2. Exécuter la requête SQL
    $cnx->exec($sql_del);//exec is used with insert/update/delete
                           //$cnx->query is used with select
    }catch(PDOException $e){
        echo'Echec de supprission'.$e->getMessage();
    }
    header('Location:admin.php');
?>