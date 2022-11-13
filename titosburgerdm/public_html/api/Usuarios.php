<?php 
class Usuarios {
    private int $idUsuario;
    private string $nome;
    private string $sobrenome;
    
    
    private int $idGenero;
    private string $genero;
    private string $idTipoPersona;
    private string $tipoPersona;
    private int $data;
    private int $cpf;
    private int $rg;
    private int $cnpj;
    private int $ie;
    private int $im;
    private string $razaoSocial;
    private string $nomeFantasia;
    private int $isim;
    private string $login;
    private string $senha;
    private string $senhaSegura;
    

// Dados Clientes


    public function setIdUsuario(int $idUsuario){
        return $this->$idUsuario = $idUsuario;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setNome(string $nome){
        return $this->$nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }


    public function setSobrenome(string $sobrenome){
        return $this->$sobrenome = $sobrenome;
    }

    public function getSobreome(){
        return $this->sobrenome;
    }

    public function setData(int $data){
        return $this->data = $data;
    }
    
    public function getData(){
        return $this->data;
    }

    public function setIdGenero(int $idGenero){
        return $this->$idGenero = $idGenero;
    }
    
    public function getIdGenero(){
        return $this->idGenero;
    }

    public function setGenero(string $genero){
        return $this->$genero = $genero;
        }
        
    public function getGenero(){
        return $this->genero;
    }

    public function setIdTipoPersona(int $idTipoPersona){
        return $this->$tipoPersona = $tipoPersona;
    }
    
    public function getIdTipoPersona(){
        return $this->idTipoPersona;
    }

    public function setTipoPersona(string $tipoPersona){
        return $this->$tipoPersona = $tipoPersona;
        }
        
    public function getTipoPersona(){
        return $this->tipoPersona;
    }

    public function setCpf(int $cpf){
        return $this->$cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }

    
    public function setRg(int $rg){
        return $this->$rg = $rg;
    }

    public function getRg(){
        return $this->rg;
    }
    // Dados Usuario





    // Dados fornecedor

    public function setRazaoSocial(string $razaoSocial){
        return $this->$razaoSocial = $razaoSocial;
    }
    //Razão Sociall
    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function setNomeFantasia(string $nomeFantasia){
        return $this->$nomeFantasia = $nomeFantasia;
    }
    //inscrição Nome fantasia
    public function getNomeFantasia(){
        return $this->nomeFantasia;
    }

    public function setCnpj(int $cnpj){
        return $this->$cnpj = $cnpj;
    }
    public function getCnpj(){
        return $this->cnpj;
    }


    public function setIe(int $ie){
        return $this->$ie = $ie;
    }

    public function getIe(){
        return $this->ie;
    }

    public function setIm(int $im){
        return $this->$im = $im;
    }

    public function getIm(){
        return $this->im;
    }

    public function setIsim(int $isim){
        return $this->$isim = $isim;
    }

    public function getIsim(){
        return $this->isim;
    }




    // Dados de Login
    public function setLogin(string $login){
        return $this->$login = $login;
    }

    public function getLogin(){
    return $this->login;
    }

    public function setSenha(string $senha){
        return $this->$senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setSenhaSegura(string $senhaSegura){
        return $this->$senhaSegura = $senhaSegura;
    }
    public function getSenhaSegura(){
        return $this->senhaSegura;
    }

}