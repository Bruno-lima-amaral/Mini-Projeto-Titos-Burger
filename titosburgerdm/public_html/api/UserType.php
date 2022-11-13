<?php
class UserType{
    private string $idUserType;
   private string $userType;

   public function setUserType(string $userType){
    return $this->$userType = $userType;
   }
   public function getUserType(){
    return $this->userType;
    }

   public function setIdUserType(string $idUserType){
    return $this->$idUserType = $idUserType;
   }
   public function getidUserType(){
    return $this->idUserType;
    }

}