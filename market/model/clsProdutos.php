<?php


class Produto {
    private $id, $nome, $preco, $quantidade, $categoria, $foto;
    
    function __construct($id = NULL, $nome= NULL, $preco= NULL, $quantidade= NULL, $categoria= NULL, $foto= NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
        $this->foto = $foto;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getFoto() {
        return $this->foto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }
}