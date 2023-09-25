<?php
class Produtos {
    private $idProdutos;
    private $descricao;
    private $precoCompra;
    private $precoVenda;
    private $qtdeEstoque;

    public function getIdProdutos() {
        return $this->idProdutos;
    }

    public function setIdProdutos($idProdutos) {
        $this->idProdutos = $idProdutos;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPrecoCompra() {
        return $this->precoCompra;
    }

    public function setPrecoCompra($precoCompra) {
        $this->precoCompra = $precoCompra;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda) {
        $this->precoVenda = $precoVenda;
    }

    public function getQtdeEstoque() {
        return $this->qtdeEstoque;
    }

    public function setQtdeEstoque($qtdeEstoque) {
        $this->qtdeEstoque = $qtdeEstoque;
    }
}
