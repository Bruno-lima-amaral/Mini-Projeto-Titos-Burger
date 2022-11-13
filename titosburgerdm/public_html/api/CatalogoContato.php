<?php

    class CatalogoContato{
        private Int $idContato;
        private String $contato;

        public function setIdContato(Int $idContato){
            return $this -> idContato = $idContato;
        }

        public function getIdContato(){
            return $this -> idContato;
        }

        public function setContato(String $contato){
            return $this -> contato = $contato;
        }

        public function getContato(){
            return $this -> contato;
        }
    }