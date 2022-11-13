<?php

    class CatalogoEndereco{
        private Int $idEndereco;
        private Int $cep;
        private String $longradouro;
        private Int $numero;
        private String $bairro;
        private String $cidade;
        private String $uf;
        private String $complemento;
        private Int $enderecoPrincipal;


        // Set & Get CatalogoEndereco
        public function setIdEndereco(Int $idEndereco){
            return $this -> idEndereco = $idEndereco;
        }

        public function getIdEndereco(){
            return $this -> idEndereco;
        }

        public function setCep(Int $cep){
            return $this -> cep = $cep;
        }

        public function getCep(){
            return $this -> cep;
        }

        public function setLongradouro(String $longradouro){
            return $this -> longradouro = $longradouro;
        }

        public function getLongradouro(){
            return $this -> longradouro;
        }

        public function setNumero(Int $numero){
            return $this -> numero = $numero;
        }

        public function getNumero(){
            return $this -> numero;
        }
        
        public function setBairro(String $bairro){
            return $this -> bairro = $bairro;
        }

        public function getBairro(){
            return $this -> bairro;
        }
        
        public function setCidade(String $cidade){
            return $this -> cidade = $cidade;
        }

        public function getCidade(){
            return $this -> cidade;
        }

        public function setUf(String $uf){
            return $this -> uf = $uf;
        }

        public function getUf(){
            return $this -> uf;
        }

        public function setComplemento(String $complemento){
            return $this -> complemento = $complemento;
        }

        public function getComplemento(){
            return $this -> complemento;
        }

        public function setEnderecoPrincipal(String $enderecoPrincipal){
            return $this -> enderecoPrincipal = $enderecoPrincipal;
        }

        public function getEnderecoPrincipal(){
            return $this -> enderecoPrincipal;
        }

    }