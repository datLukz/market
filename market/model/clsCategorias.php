<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsCategoria
 *
 * @author 181710066
 */
class Categoria {
    private $id;
    private $nome;
 
    
    public function __construct($id = NULL, $nome = NULL){
        $this->id = $id;
        $this->nome = $nome;
      
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
 



}