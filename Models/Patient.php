<?php 

class Patient{
protected $id;
protected $nom;
protected $prenom;

public function__construct($id,$nom,$prenom){
    $this->id = $id;
    $this->nom = $nom;
    $this->prénom = $prenom;
}

public function getId(){
    return $this->id;
}
public function setId($id){
    return $this->id=$id;
}
public function getNom(){
    return $this->nom;
}
public function setNom($nom){
    return $this->nom=$nom;
}
public function getPrenom(){
    return $this->prenom;
}

public function setPrenom($prenom){
    return $this->prenom=$prenom;
}



}


















?>