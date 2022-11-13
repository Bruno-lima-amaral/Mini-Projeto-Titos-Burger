<?php
class Status{
  private int $idstatus;
  private  string $status;



public function setidstatus(int $idstatus){
    return $this->$idstatus = $idstatus;
}

public function getidstatus(){
    return $this->idstatus ;
}

public function setstatus(string $status){
    return $this->$status = $status;
}
public function getstatus(){
    return $this->status ;
}






}