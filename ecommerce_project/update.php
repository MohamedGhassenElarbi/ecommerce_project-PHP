<?php
include('connection.php');
$v_id =$_POST['id'];
$v_marque =$_POST['marque'];
$v_modele = $_POST['modele'];
$v_etat = $_POST['etat'];
$v_prix =$_POST['prix'];
$v_lien = $_POST['lien'];
$v_coleur = $_POST['coleur'];
$v_description = $_POST['description'];
try{
    $sql_aj = "UPDATE phone SET state='$v_etat', name='$v_marque', marque='$v_modele', image='$v_lien', price='$v_prix', description='$v_description', couleur='$v_coleur' WHERE id='$v_id'";
    // 2. Exécuter la requête SQL
    $cnx->exec($sql_aj);//exec is used with insert/update/delete
                           //$cnx->query is used with select
    }catch(PDOException $e){
        echo'Echec d insertion'.$e->getMessage();
    }
    header('Location:admin.php');
?>