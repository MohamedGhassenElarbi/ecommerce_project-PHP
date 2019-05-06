<?php
include('connection.php');
$v_marque =$_POST['marque'];
$v_modele = $_POST['modele'];
$v_etat = $_POST['etat'];
$v_prix =$_POST['prix'];
$v_lien = $_POST['lien'];
$v_coleur = $_POST['coleur'];
$v_description = $_POST['description'];
try{
    $sql_aj = "INSERT INTO phone ( state, name,marque,image,price,description,couleur) VALUES('$v_etat','$v_marque','$v_modele','$v_lien','$v_prix','$v_description','$v_coleur')";
    // 2. Exécuter la requête SQL
    $cnx->exec($sql_aj);//exec is used with insert/update/delete
                           //$cnx->query is used with select
    }catch(PDOException $e){
        echo'Echec d insertion'.$e->getMessage();
    }
?>