<?php
class phone{
//attributs
private  $id;
private  $state;
private $name;
private $marque;
private $image;
private $price;
private $description;
private $couleur;
//constructeur
public function __construct( $id, $state, $name, $marque, $image,$price,$description,$couleur){
$this->id=$id;
$this->state=$state;
$this->name=$name;
$this->marque=$marque;
$this->image=$image;
$this->price=$price;
$this->description=$description;
$this->couleur=$couleur;
}
//getters
public function getId(){
return $this->id;
}
public function getState(){
return $this->state;
}
public function getName(){
return $this->name;
}
public function getMarque(){
return $this->marque;
}
public function getImage(){
return $this->image;
}
public function getPrice(){
return $this->price;
}
public function getDescription(){
return $this->description;
}
public function getCouleur(){
return $this->couleur;
}
//setters
public function setId( $id){
$this->id=$id;
}
public function setState( $state){
$this->state=$state;
}
public function setName( $name){
$this->name=$name;
}
public function setMarque( $marque){
$this->marque=$marque;
}
public function setImage( $image){
$this->image=$image;
}
public function setPrice( $price){
$this->price=$price;
}
public function setDescription( $description){
$this->description=$description;
}
public function setCouleur( $couleur){
$this->couleur=$couleur;
}
}
?>