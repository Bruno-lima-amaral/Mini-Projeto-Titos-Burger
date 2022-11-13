<?php
class TypeContact{
private string $idTypeContact;
private string $typeContact;

public function setIdTypeContact(string $idTypeContact){
    return $this-> idTypeContact = $idTypeContact;
    }

    public function getIdTypeContact(){
    return $this-> idTypeContact;
    }
    
    public function setTypeContact(string $typeContact){
    return $this-> typeContact = $typeContact;
    }

    public function getTypeContact(){
    return $this-> typeContact;
    }
    

}